<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
$username = $_SESSION["username"];
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    </head>

    <link rel="stylesheet" href="cnd/css/loader.css">
    <link rel="stylesheet" href="cnd/css/container.css">
    <link rel="stylesheet" href="cnd/css/background.css">
    <script src="cnd/js/loader.js"></script>
<body>
    <?php

    
    if(isset($_POST["delete-acc"])){
        require("mysql.php");
        $stmt = $mysql->prepare("DELETE FROM accounts WHERE USERNAME=:user;"); 
        $stmt->bindParam(":user", $username);
        $stmt->execute();
        $count = $stmt->rowCount();

    }
    ?>
    <div class="loader"></div>


    <form action="settings.php" method="post">
        <button type="submit" name="delete-acc">delete account</button>
    </form>
</body>
</html>


