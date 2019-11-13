<?php
require('connection.php');
require("check.php") ;

?>
<!DOCTYPE html>
<html>
<head>
  <title>The Gaming Industry</title>
  <meta name="viewport" content="width=device-width,user-scalable=no"/>
  <link href="css/mystyle.css" rel='stylesheet' type='text/css'>
  <link href = "css/responsive_style.css" rel='stylesheet' type='text/css'/>
  <link rel="shortcut icon" type="image/png" href="img/title.png" />
  <script src="js/mobile_menu.js"></script>
</head>

<body>

  <div>
    <img class = 'logo' src="img/controller.png" width= '150px' height= '90px'>
  </div>
    <ul class = 'topnav' id = 'myTopnav'>
      <li class="firstli">
      <li><a href="Website.php">Home</a></li>
      <li><a href="stocks.php">Stocks</a></li>
      <li><a href="#panel">About</a></li>
      <li><a href="#footer">Contact us</a></li>
      <li id="logged_in"><?php echo $loggedIn ?></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="showResponsiveMenu()">&#9776;</a> </li>
    </li>
  </ul>
    <div class="content">
      <div class="cont">
        <img src="img/mario.jpg" width = '100%' height = '90%'>
      </div>
      <div class="content_mobile">
        <img src="img/mario.jpg" width = '100%' height = '40%'>
      </div>
      <div class="panel-header" id="panel"><h1>About</h1></div>
      <div class="panel-body">
        <ul class="list">
            <li><p> Gaming is when a person plays interactive games, usually video games. It has grown to be the most popular advancement in human technology since the mobile phone
              as it allows people to expand their imagination and exeprience lives they can never have in the real world. "I am a gamer not because I dont have a life
              but because I choose to have many". Games mirror the way the human mind was designed to learn. They motivate players to take risks and actions, persevere through failures,
              set and achieve increasingly difficult goals, and devote attention, time, and effort to acquiring knowledge and skills. All this while the game is tracking the player’s actions
               and assessing the player’s achievements and skills. </p></li>
            <li><p> The Gaming Industry is a business that sells all types of games, we offer various selections and add to our stock as soon as a new item has been released.
            We believe in a brighter future full of games, it will be a world worth waiting for.</p>
            <p> This website allows you to add, delete and see what is in stock </p></li>
        </ul>
      </div>
    </div>
    <div class="content">
      <div class = "cont">
        <img src="img/assn.png" width = '100%' height = '90%'>
      </div>
      <div class='content_mobile'>
        <img src="img/assn.png" width = '100%' height = '40%'>
      </div>
    <div
     class = "foot"
     id="footer">
                  <a id =-"fb" href="http://www.facebook.com" target="_blank" title="Like this page on Facebook"><img src="img/fb.ico" width= "7%" height = "10%"></a>
                  <a id = "twit" href="http://www.twitter.com" target="_blank" title="Follow this page on Twitter"><img src="img/twitter.png" width= "7%" height = "10%"></a>
                  <a id = "insta" href="http://www.instagram.com" target="_blank" title="Follow this page on Instagram"><img src="img/insta.png" width= "7%" height = "10%"></a>
                  <a id = "insta" href="https://plus.google.com/" target="_blank" title="Follow this page on Google Plus"><img src="img/ggp.png" width= "7%" height = "10%"></a>

    </div>
    <div
    class='foot_mobile'
    id="footer">
          <a id =-"fb" href="http://www.facebook.com" target="_blank" title="Like this page on Facebook"><img src="img/fb.ico" width= "15%" height = "8%"></a>
          <a id = "twit" href="http://www.twitter.com" target="_blank" title="Follow this page on Twitter"><img src="img/twitter.png" width= "15%" height = "8%"></a>
          <a id = "insta" href="http://www.instagram.com" target="_blank" title="Follow this page on Instagram"><img src="img/insta.png" width= "15%" height = "8%"></a>
          <a id = "insta" href="https://plus.google.com/" target="_blank" title="Follow this page on Google Plus"><img src="img/ggp.png" width= "15%" height = "8%" ></a>
    </div>
</html>
