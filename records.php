<?php
    include "connection.php";
if(isset($_POST['submit'])){
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Student Records</h1>
    <form method="GET" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['student_id'])) {
        $student_id = $_GET['student_id'];
        $sql ="select * from records where student_id ='$student_id'";
        $result = mysqli_query($conn, $sql);
      
        if(mysqli_num_rows($result)>0){
            echo "<table border='3'>";
            echo "<tr><th>Name</th><th>Awards</th><th>Date Awarded</th></tr>";
            
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>", $row["name"],"</td>";
                echo "<td>", $row["awards"],"</td>";
                echo "<td>", $row["date_awarded"],"</td>";
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