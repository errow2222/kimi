<?php
    include "connection.php";
if(isset($_POST['submit'])){
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Payment Records</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include "navbar3.php";
    ?>
<div id="form">
    <h1>Payment Records</h1>
    <form name="form" method="GET" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
        <button id="btn" type="submit">Search</button>
    </form>
</div>

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