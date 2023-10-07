<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
      body {
        background-color: lightblue;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      .login-container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
      }

      .login-form {
        margin-top: 10px;
      }

      .input-field {
        margin-bottom: 10px;
      }

      .button {
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <?php
    
    ?>
    <div class="login-container">
      <h1>Anmelden</h1>
      <form action="index.php" method="post" class="login-form">
        <div class="input-field">
          <input type="text" name="username" placeholder="Username" class="username-input" required>
        </div>
        <div class="input-field">
          <input type="password" name="pw" placeholder="Passwort" class="password-input" required>
        </div>
        <button type="submit" name="submit" class="button">Einloggen</button>
      </form>
    </br>
      <a href="register.php" class="button">Noch keinen Account</a>
      
    </div>
  </body>
</html>
