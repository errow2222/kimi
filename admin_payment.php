<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $student_id = $_POST['student_id'];
    $amount = $_POST['amount'];
    $payment_date = $_POST['payment_date'];
    $outstanding_balance = $_POST['outstanding_balance'];

    // Retrieve the current outstanding balance
    $query = "SELECT outstanding_balance FROM payment WHERE student_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $current_balance = 0;
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_balance = $row['outstanding_balance'];
    }
    $stmt->close();

    // Calculate the new outstanding balance
    $new_balance = $current_balance - $amount;

    // Update the payment information
    $query = "UPDATE payment SET amount = ?, payment_date = ?, outstanding_balance = ? WHERE student_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("dsds", $amount, $payment_date, $new_balance, $student_id);
    $stmt->execute();
    $stmt->close();

    echo "Payment updated successfully.";
}

// Retrieve payment details for editing
$payment = [];
if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];
    $query = "SELECT * FROM payment WHERE student_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $payment = $result->fetch_assoc();
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Payment</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Edit Payment</h1>
    <form method="POST" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" value="<?php echo isset($payment['student_id']) ? $payment['student_id'] : ''; ?>" required>
        <label for="amount">Amount:</label>
        <input type="number" step="0.01" id="amount" name="amount" value="<?php echo isset($payment['amount']) ? $payment['amount'] : ''; ?>" required>
        <label for="payment_date">Payment Date:</label>
        <input type="date" id="payment_date" name="payment_date" value="<?php echo isset($payment['payment_date']) ? $payment['payment_date'] : ''; ?>" required>
        <label for="outstanding_balance">Outstanding Balance:</label>
        <input type="number" step="0.01" id="outstanding_balance" name="outstanding_balance" value="<?php echo isset($payment['outstanding_balance']) ? $payment['outstanding_balance'] : ''; ?>" required>
        <button type="submit" name="submit">Update</button>
    </form>

    <h2>Past Transactions</h2>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>Outstanding Balance</th>
        </tr>
        <?php
        if (isset($student_id)) {
            $query = "SELECT * FROM payment WHERE student_id = ? ORDER BY payment_date DESC";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $student_id);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['payment_date'] . "</td>";
                echo "<td>" . $row['outstanding_balance'] . "</td>";
                echo "</tr>";
            }
            $stmt->close();
        }
        ?>
    </table>
</body>
</html>

