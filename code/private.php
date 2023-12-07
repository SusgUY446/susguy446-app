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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
    <!-- Import Styles -->
    <link rel="stylesheet" href="cnd/css/loader.css">
    <link rel="stylesheet" href="cnd/css/container.css">
    <link rel="stylesheet" href="cnd/css/color-changer.css">
    <link rel="stylesheet" href="cnd/css/background.css">
    <link rel="stylesheet" href="cnd/css/navbar.css">
    <link rel="stylesheet" href="cnd/css/sidebar.css">
    
    <title>Your Personal Site</title>

    <!-- import scripts -->
    <script src="cnd/js/sidebar.js"></script>
    <script src="cnd/js/loader.js"></script>
    <script src="cnd/js/color.js"></script>
    <script>

    <script>
        


        
    </script>


  </head>
  <body>
    
  <div class="loader"></div>
  
  <div class="container">
      <h1>Hallo <?php echo $username?></h1>
      
      
    <script>
      setRandomImage();
    </script>

    

  </div>
  
  <div class="dropdown">
    <span>Change Color</span>
    <div class="dropdown-content">
      <div class="color-changer">
        <button onclick="setColor('green')" class="button-green">Green</button>
        <button onclick="setColor('red')" class="button-red">Red</button>
        <button onclick="setColor('blue')" class="button-blue">Blue</button>
      </div>
    </div>
    </div>
    
    <div class="navbar">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="games.php">Games</a>
        </li>

        <li class="account-dropdown">
          <a href="">Account</a>
      </li> 
      </ul>
    </div>

    <div class="sidebar" id="sidebar">
      <ul>
  
        <li>
          <a href="">Home</a><br>
        </li>

        <li>
          <a href="">Pricing</a><br>
        </li>

        <li>
          <a href="">Settings</a><br>
        </li>
      </ul>
    </div>



    

      

    

  </body>
</html>