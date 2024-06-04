<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php include "navbar2.php";
    ?>
    <div id="form">
    <h1>Welcome Admin!</h1>
    </div>
    <div>
       <button id="button" onclick="location.href='admin_attendance.php'">Add Student Attendance</button>
        <button id="button" onclick="location.href='admin_record.php'">Add Student Records</button>
        <button id="button" onclick="location.href='admin_payment.php'">Add Payment Records</button>
    </div>
</body>
</html>