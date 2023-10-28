<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>  
    <meta charset="utf-8">
    <link rel="stylesheet" href="cnd/css/loader.css">
    <link rel="stylesheet" href="cnd/css/container.css">
    <link rel="stylesheet" href="cnd/css/background.css">
    <link rel="stylesheet" href="cnd/css/button.css">
    <title>Register</title>
    <style>
      .login-form {
        margin-top: 10px;
      }

      .input-field {
        margin-bottom: 10px;
      }
    </style>

  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); 
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 0){
        
        if($_POST["pw"] == $_POST["pw2"]){
          
          $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, :pw)");
          $stmt->bindParam(":user", $_POST["username"]);
          $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
          $stmt->bindParam(":pw", $hash);
          $stmt->execute();
          echo "Account created";
        } else {
          echo "The passwords do not match";
        }
      } else {
        echo "The username is already in use";
      }
    }
     ?>
    <div class="container">
      <h1>Register</h1>
      <form action="register.php" method="post" class="register-form">
      <div class="input-field">
        <input type="text" name="username" placeholder="Username" required><br>
      </div>
      <div class="input-field">
        <input type="password" name="pw" placeholder="Password" required><br>
      </div>
      <div class="input-field">
        <input type="password" name="pw2" placeholder="Repeat Password" required><br>
      </div>
      <div class="input-field">
        <button type="submit" name="submit" class="register-button">Create</button>
      </div>
      </form>
      <br>
    <a href="index.php">Already have a Account?</a>
  </div>
  </body>
</html>