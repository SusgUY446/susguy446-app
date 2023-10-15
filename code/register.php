<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account erstellen</title>
    <style>
      body {
        background-color: lightblue;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      .register-container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
    session_start(); // Start the session at the beginning

    if (isset($_POST["submit"])) {
        require("mysql.php");
        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); // Username überprüfen
        $stmt->bindParam(":user", $_POST["username"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 0) {
            // Username ist frei
            if ($_POST["pw"] == $_POST["pw2"]) {
                // User anlegen
                $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, :pw)");
                $stmt->bindParam(":user", $_POST["username"]);
                $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
                $stmt->bindParam(":pw", $hash);
                $stmt->execute();
                
                // Set the session for the newly registered user
                $_SESSION["username"] = $_POST["username"];
                
                echo "Dein Account wurde angelegt";
                // You can also consider redirecting the user to a welcome page.
            } else {
                echo "Die Passwörter stimmen nicht überein";
            }
        } else {
            echo "Der Username ist bereits vergeben";
        }
    }
    ?>
    <div class="register-container">
      <h1>Account erstellen</h1>
      <form action="register.php" method="post" class="register-form">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="pw" placeholder="Passwort" required><br>
        <input type="password" name="pw2" placeholder="Passwort wiederholen" required><br>
        <button type="submit" name="submit">Erstellen</button>
      </form>
      <br>
      <a href="index.php">Hast du bereits einen Account?</a>
    </div>
  </body>
</htm
  l>
