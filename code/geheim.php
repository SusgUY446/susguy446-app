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
    <title>Images</title>
  </head>
  <body>
    <h1>Hallo <?php echo $username?></h1>
    <img src="https://imgur.com/a/4pAIFP1" alt="Baldur"></br></br></br>
    <a href="logout.php">Abmelden</a>
  </body>
</html>