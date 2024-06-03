<?php
    include "connection.php";
if(isset($_POST['submit'])){
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Records</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Payment Records</h1>
    <form method="GET" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['student_id'])) {
        $student_id = $_GET['student_id'];
        $sql ="select * from payment where student_id ='$student_id'";
        $result = mysqli_query($conn, $sql);
      
        if(mysqli_num_rows($result)>0){
            echo "<table border='3'";
            echo "<tr><th>Payment Date</th><th>Amount</th><th>Outstanding Balance</th></tr>";
            
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>", $row["payment_date"],"</td>";
                echo "<td>", $row["amount"],"</td>";
                echo "<td>", $row["outstanding_balance"],"</td>";
                echo "</tr>";
            }
            echo"<table";
        } else{
            echo "No records found for STUDENT ID: "; htmlspecialchars($student_id);
        }
    }
    ?>
        </body>
        </html>