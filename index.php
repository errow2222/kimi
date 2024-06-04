<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeLink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
    include "navbar.php";
    ?>
    <div id="form">
    <h1>Welcome to WeLink</h1>
    <a id="button2" class="btn btn-outline-success mx-2" type="submit" href="guardian_login.php">Guardian</a>
     <a id="button3" class="btn btn-outline-primary mx-2" type="submit" href="admin_login.php">Admin</a>
  </body>
</html>