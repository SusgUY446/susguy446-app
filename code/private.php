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
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .container {
        align-self: flex-start;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
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
        transition: opacity 2s, visibility 2s;
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
        animation: loading 2s ease infinite;
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
    <div class="container">
      <h1>Hallo <?php echo $username?></h1>
      <img src="images/baldur.jpg" alt="my dog" width="1000px" height="1000px">
    </div>

  </body>
</html>
