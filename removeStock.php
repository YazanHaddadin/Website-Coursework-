<?php
require('connection.php');
require('check.php');
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
    <img class = 'logo' src="img/controller.png" width= '150px' height= '90px' align= 'middle'>
  </div>
    <ul class = 'topnav' id = 'myTopnav'>
      <li class="firstli">
      <li><a href="Website.php">Home</a></li>
      <li><a href="stocks.php">Stocks</a></li>
      <li><a href="Website.php">About</a></li>
      <li><a href="#footer">Contact us</a></li>
      <li id="logged_in"><?php echo $loggedIn ?></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="showResponsiveMenu()">&#9776;</a> </li>
    </li>
  </ul>

  <div class="content">
  <div class="panel-header"><h1>Stocks</h1></div>

<?php
require('connection.php');
require('error_check.php');

$game = htmlentities($_POST['mygame']);
$game_type = htmlentities($_POST['genre']);
$age_group = htmlentities($_POST['age']);

deleteStock($conn, $game, $game_type, $age_group);

function deleteStock($conn,$game, $game_type, $age_group)
{
  if($game != "" && $game_type != "--" && $age_group != "--"){
    $sql = "DELETE FROM stocks
            WHERE game = '$game'
            AND type ='$game_type'
            AND age_group = '$age_group'";

    if ($conn->query($sql) === TRUE)
  {
      echo "<p id=Success> Successfully deleted Record </p> <br /><br />";
      echo "<a id = 'try_again' href='stocks.php'>Back to Stock Page </a>";
      exit;
  }

  else
  {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
  }
    }

  else{
    echo "<b>Please select all options</b><br />";
    echo "<a id = 'try_again' href='stocks.php'>Try Again</a>";
    exit;
  }

  $conn->close();
  }

    ?>

    </div>
    </div>
    </body>
    </html>
