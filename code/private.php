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
    <!-- Import Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cnd/css/loader.css">
    <link rel="stylesheet" href="cnd/css/container.css">
    <link rel="stylesheet" href="cnd/css/color-changer.css">
    <link rel="stylesheet" href="cnd/css/background.css">
    <meta charset="utf-8">
    <title>Your Personal Site</title>


    <script type="text/javascript" src="cnd/js/loader.js"></script>
    <script>
        
        const imageFiles = [
            'baldur.jpg',
            'baldur2.jpg',
            'baldur3.jpg',
            
        ];

        
        function setRandomImage() {
            const randomIndex = Math.floor(Math.random() * imageFiles.length);
            const randomImage = imageFiles[randomIndex];
            const imgElement = document.querySelector('.random-img');
            imgElement.src = `/personal-site/images/${randomImage}`; 
        }

        
       
    </script>
    <script>
        

        function setColorBlue() {
            document.body.style.backgroundColor = "blue";
        }

        function setColorRed() {
            document.body.style.backgroundColor = "red";
        }

        function setColorGreen() {
            document.body.style.backgroundColor = "green";
        }

        
    </script>


  </head>
  <body>
    
  <div class="loader"></div>
  
  <div class="container">
      <h1>Hallo <?php echo $username?></h1>
      <img src="" alt="random image of my dog" width="900px" height="900px" class="random-img">
      
    <script>
      setRandomImage();
    </script>
    <style>
      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }

    </style>
    

  </div>
  <div class="dropdown">
    <span>Change Color</span>
    <div class="dropdown-content">
      <div class="color-changer">
        <button onclick="setColorGreen()" class="button-green">Green</button>
        <button onclick="setColorRed()" class="button-red">Red</button>
        <button onclick="setColorBlue()" class="button-blue">Blue</button>
      </div>
    </div>
    </div>

    

      

    

  </body>
</html>