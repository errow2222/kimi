<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Guardian Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "navbar3.php";
    ?>
    <div id="form">
    <h1>Welcome Guardian!</h1>
    </div>
    <div>
       <button id="button" onclick="location.href='attendance.php'">Student Attendance</button>
        <button id="button" onclick="location.href='records.php'">Student Records</button>
        <button id="button" onclick="location.href='payment.php'">Payment Records</button>
    </div>
</body>
</html>