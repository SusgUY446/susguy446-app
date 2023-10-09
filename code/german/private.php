<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
$username = $_SESSION["username"];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your Personal Site</title>
    <style>
      body {
        background-color: lightblue;
      }
    </style>
  </head>
  <body>
    <h1>Hallo <?php echo $username?></h1>
    </br>
    <img scr="./images/balur.jpg">

    </br>
    </br>
    <a href="logout.php">Abmelden</a>
  </body>
</html>