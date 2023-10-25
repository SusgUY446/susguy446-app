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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="loader.css">
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
      #settings {

      }
      .container {
        align-self: flex-start;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
      }


    </style>
    <style>
      
.sidenav {
  height: 100%; 
  width: 0; 
  position: fixed; 
  z-index: 1; 
  top: 0; 
  left: 0;
  background-color: #111; /
  overflow-x: hidden; 
  padding-top: 60px; 
  transition: 0.5s; 
}

.sidenav a {
  opacity: 0;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}


.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


#main {
  transition: margin-left .5s;
  padding: 20px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 
    </style>
    <script type="text/javascript" src="loader.js"></script>
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
    
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById(".sidenav a").style.opacity = "1";
  }


  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById(".sidenav a").style.opacity = "0";
  } 
    </script>

  </head>
  <body>
    
  <div class="loader"></div>
  <div id="main">
    <div class="container">
      <h1>Hallo <?php echo $username?></h1>
      <!--<img src="" alt="random image of my dog" width="900px" height="900px" class="random-img">-->
      <!--
        <script>
          setRandomImage();
        </script>
    -->
    </div>
  </div>
  <!--Settings-->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

    

      

    

  </body>
</html>
