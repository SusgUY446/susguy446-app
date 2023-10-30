<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="cnd/css/loader.css">
    <link rel="stylesheet" href="cnd/css/container.css">
    <link rel="stylesheet" href="cnd/css/background.css">
    <link rel="stylesheet" href="cnd/css/button.css">
    <link rel="stylesheet" href="cnd/css/login-form.css">

    <script src="cnd/js/loader.js"></script>
  </head>
  <body>
  <?php


    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 1){
        
        $row = $stmt->fetch();
        if(password_verify($_POST["pw"], $row["PASSWORD"])){
          session_start();
          $_SESSION["username"] = $row["USERNAME"];
          header("Location: private.php");
        } else {
          echo "The login failed";
        }
      } else {
        echo "The login failed";
      }
    }
     ?>
    <div class="loader"></div>
    
    <div class="container">
      <h1>Login</h1>
      <form action="index.php" method="post" class="form">
        <div class="input-field">
          <input type="text" name="username" placeholder="Username" class="username-input" required>
        </div>
        <div class="input-field">
          <input type="password" name="pw" placeholder="Password" class="password-input" required>
        </div>
        <button type="submit" name="submit" class="login-button">Login</button>
      </form>
    </br>
      <a href="register.php" class="register">Register</a>
      
    </div>
  </body>
</html>
