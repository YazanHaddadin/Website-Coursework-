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
      <li><a href="Website.php">Contact us</a></li>
      <li id="logged_in"><?php echo $loggedIn ?></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="showResponsiveMenu()">&#9776;</a> </li>
    </li>
  </ul>

  <div class="content">
  <div class="panel-header"><h1>Stocks</h1></div>
  <div class = "panel-body">

<?php
require('connection.php');

$game = htmlentities($_POST["mygame"]);
$game_type = htmlentities($_POST["genre"]);
$age_group = htmlentities($_POST['age']);
$output = '<ul class="list">';

//if else statements for validation
if($game != "" || $game_type != "--" && $age_group != "--"){
  $sql = "SELECT * FROM stocks
          WHERE game = '$game'
          AND type ='$game_type'
          AND age_group = '$age_group'";

          if ($game_type === "ALL" && $age_group === "ALL"){
            $sql = "SELECT * FROM stocks";
          }
          else if ($game_type == "ALL" && $age_group != "ALL"){
            $sql =
            "SELECT * FROM stocks
            WHERE age_group = '$age_group'";
          }
          else if ($game_type != "ALL" && $age_group == "ALL"){
            $sql =
            "SELECT * FROM stocks
            WHERE type = '$game_type'";
          }
          else if ($game != "" && $game_type === "--" && $age_group === "--"){
                  $sql = "SELECT * FROM stocks
                          WHERE game = '$game'";
                }

        }
    else if ($game === "" && $game_type != "--" && $age_group != "--"){
            $sql = "SELECT * FROM stocks
                    WHERE type = '$game_type'
                    AND age_group = '$age_group'";
          }
    else if ($game != "" && $game_type != "--" && $age_group === "--"){
            $sql = "SELECT * FROM stocks
                    WHERE game = '$game'
                    AND type = '$game_type'";
          }
    else if ($game != "" && $game_type === "--" && $age_group != "--"){
            $sql = "SELECT * FROM stocks
                    WHERE game = '$game'
                    AND age_group = '$age_group'";
          }
    else if ($game === "" && $game_type != "--" && $age_group === "--"){
            $sql = "SELECT * FROM stocks
                    WHERE type = '$game_type'";
          }
    else if ($game === "" && $game_type === "--" && $age_group != "--"){
            $sql = "SELECT * FROM stocks
                    WHERE age_group = '$age_group'";
          }

else{
  echo "<b>Please select an option</b><br />";
  echo "<a id = 'try_again' href='stocks.php'>Try Again</a>";
  exit;
}

$result = $conn->query($sql);

if ($result->num_rows > 0)
                {
                    // output data of each row
                    while($row = $result->fetch_assoc())
                    {
                          $output.=
                          "<li>
                            <p>Game:". $row["game"] . "</p>
                            <p>Game Type: " .$row["type"] ."</p>
                            <p>Age Group: " . $row["age_group"] ."</p>
                            <p>Quantity: ". $row["quantity"]."</p>
                          </li> <br />";

                    }
                    echo "<a id = 'try_again' href='stocks.php'>Back to Stock Page </a>";
                }
                else
                {
                    echo "<h3>No results found</h3>";
                    echo "<a id = 'try_again' href='stocks.php'>Try Again</a>";
                    exit;
                }

                $output.= '</ul>';
                echo $output ;
                $conn->close();
             ?>

         </div>
      </div>
    </div>
  </body>
</html>
