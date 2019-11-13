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
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/fontawesome.min.css">
  <script src="js/helper.js"></script>
</head>

<body onload="addEventListeners()">

  <div>
    <img class = 'logo' src="img/controller.png" width= '150px' height= '90px' align= 'middle'>
  </div>
    <ul class = 'topnav' id = 'myTopnav'>
      <li class="firstli">
      <li><a href="Website.php">Home</a></li>
      <li><a href="stocks.php">Stocks</a></li>
      <li><a href="Website.php">About</a></li>
      <li><a href="Website.php">Contact us</a></li>
      <li id="logged_in"><?php echo $loggedIn ?></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="showResponsiveMenu()">&#9776;</a> </li>
    </li>
  </ul>
    <div class="content">

      <div class="panel-header" ><h1 id="panel">Stocks</h1></div>
      <div class="panel-body">
          <!-- forms for user to choose to add, see, and delete stock -->
        <div class= "form">
        <form action="addStock.php" method="post">
          <p><strong>Add to Stock</strong></p>
          <input type="text" name="mygame" value="" placeholder="Enter a game.."> </br>

          <p><strong>Select a Genre</strong></p>
          <select name="genre">
            <option value='--'> -- </option>
            <option value="action">Action</option>
            <option value="adventure">Adventure</option>
            <option value="sport">Sport</option>
            <option value="puzzle">Puzzle</option>
            <option value="horror">Horror</option>
            <option value="straregy">Strategy</option>
            <option value="simulation">Simulation</option>
            <option value="racing">Racing</option>
            <option value="shooter">Shooter</option>
            <option value="rpg">RPG</option>
            <option value="other">Other</option>
          </select>

          <p><strong>Select an Age Group</strong></p>
          <select name="age">
            <option value='--'> -- </option>
            <option value="3">3</option>
            <option value="PG">PG</option>
            <option value="16">16</option>
            <option value="18">18</option>
            <option value="R">R-Rated</option>
          </select>
          <p><strong>Select an the Quantity</strong></p>
          <input type="text" name="quantity" value="" placeholder="Enter the quantity..">
          <input id="add" type="submit" value="Add">

        </form>


        <form action="getStock.php" method="post">
          <p><strong>Search for a Game</strong></p>
          <input type="text" name="mygame" value="" placeholder="Enter a game.."> </br>

          <p><strong>Select a Genre</strong></p>
          <select name="genre">
            <option value='--'> -- </option>
            <option value="ALL">ALL</option>
            <option value="action">Action</option>
            <option value="adventure">Adventure</option>
            <option value="sport">Sport</option>
            <option value="puzzle">Puzzle</option>
            <option value="horror">Horror</option>
            <option value="straregy">Strategy</option>
            <option value="simulation">Simulation</option>
            <option value="racing">Racing</option>
            <option value="shooter">Shooter</option>
            <option value="rpg">RPG</option>
            <option value="other">Other</option>

          </select>

          <p><strong>Select an Age Group</strong></p>
          <select name="age">
            <option value='--'> -- </option>
            <option value="ALL">ALL</option>
            <option value="3">3</option>
            <option value="PG">PG</option>
            <option value="16">16</option>
            <option value="18">18</option>
            <option value="R">R-Rated</option>

          </select>
          <button id='add' class = "actionButton"> Search </button>
        </form>

        <form action="removeStock.php" method="post">
          <p><strong>Remove from Stock</strong></p>
          <input type="text" name="mygame" value="" placeholder="Enter a game.."> </br>

          <p><strong>Select a Genre to remove</strong></p>
          <select name="genre">
            <option value='--'> -- </option>
            <option value="ALL">ALL</option>
            <option value="action">Action</option>
            <option value="adventure">Adventure</option>
            <option value="sport">Sport</option>
            <option value="puzzle">Puzzle</option>
            <option value="horror">Horror</option>
            <option value="straregy">Strategy</option>
            <option value="simulation">Simulation</option>
            <option value="racing">Racing</option>
            <option value="shooter">Shooter</option>
            <option value="rpg">RPG</option>
            <option value="other">Other</option>

          </select>

          <p><strong>Select an Age Group to remove</strong></p>
          <select name="age">
            <option value='--'> -- </option>
            <option value="ALL">ALL</option>
            <option value="3">3</option>
            <option value="PG">PG</option>
            <option value="16">16</option>
            <option value="18">18</option>
            <option value="R">R-Rated</option>

          </select>
          <br />

          <input id="remove" type="submit" value="Delete">
        </form>

      </div>
      <div class="cont">
        <img src="img/stocks.jpg" width = '100%' height = '60%'>
      </div>
      <div class="content_mobile">
        <img src="img/stocks.jpg" width = '100%' height = '40%'>
      </div>
    </div>
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
