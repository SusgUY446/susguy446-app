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
    <script>
        
        const imageFiles = [
            'dog.jpg',
            'dog2.jpg',
            'dog3.jpg',
            
        ];

        // Function to set a random image from the array
        function setRandomImage() {
            const randomIndex = Math.floor(Math.random() * imageFiles.length);
            const randomImage = imageFiles[randomIndex];
            const imgElement = document.querySelector('.random-img');
            imgElement.src = `/personal-site/images/${randomImage}`; // Update the src attribute
        }

        // Call the function to set a random image when the page loads
       
    </script>


  </head>
  <body>
    
    <div class="loader"></div>
    <div class="container">
      <h1>Hallo <?php echo $username?></h1>
      <img src="" alt="random image of my dog" width="950px" height="950px" class="random-img">
      <script>
        setRandomImage();
      </script>
    </div>

  </body>
</html>
