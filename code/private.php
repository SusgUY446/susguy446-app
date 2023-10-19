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

      .loader {
        position: fixed;
         top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #333333;
        transition: opacity 0.75s, visibility 0.75s;
    }

    .loader--hidden {
        opacity: 0;
        visibility: hidden;
    }

    .loader::after {
        content: "";
        width: 75px;
        height: 75px;
        border: 15px solid #dddddd;
        border-top-color: blue;
        border-radius: 50%;
        animation: loading 0.75s ease infinite;
    }

    @keyframes loading {
        from {
            transform: rotate(0turn);
        }
        to {
            transform: rotate(1turn);
        }
    }

    </style>
    <script>
      window.addEventListener("load", () => {
          document.querySelector(".loader").classList.add("loader--hidden");

          document.querySelector(".loader").addEventListener("transitionend", () => {
              document.body.removeChild(querySelector(".loader"))
            });

      });
    </script>
  </head>
  <body>
    <div class="loader"></div>
    <h1>Hallo <?php echo $username?></h1>
    </br>

    </br>
    </br>
    <a href="logout.php">Abmelden</a>
  </body>
</html>
