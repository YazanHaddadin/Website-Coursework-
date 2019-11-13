<?php

session_start();


if ( isset($_SESSION['appuser']))
{
  header('Location: Website.php');
}

else if ( isset($_SESSION['apperror'] ))
{
  $error = $_SESSION['apperror'] ;
  //Remove session variables
  session_unset();
  // destroy the session
  session_destroy();
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <link href="css/mystyle.css" rel='stylesheet' type='text/css'/>
    <link href="css/responsive_style.css" rel='stylesheet' type='text/css'/>
    <link rel="shortcut icon" type="image/png" href="img/title.png" />
    <script src="js/helper.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <title>The Gaming Industry Login</title>


  </head>

  <body>
     <div class="logo_login">
       <img src="img/controller.png" width= '120px' height= '70px'>
     </div>


      <div class="loginContent">
        <div class="panel-header"><h1>LOGIN </h1></div>
        <div class="panel-body">

          <div class= "form">
            <div class="errorHolder"><?php echo $error ?></div>
            <form name="loginForm" action="auth.php" method="post" onsubmit="return validateForm()">
              <input type="text" name="username" value="" placeholder="Enter your Username"> </br>
              <input type="password" name="password" value="" placeholder="Enter your Password"> </br>
              <input type="submit" value="Submit">
            </form>
          </div>

        </div>

  </body>
</html>
