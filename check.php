<?php
session_start();
$session = $_SESSION['appuser'] ;
if ( isset($session) && $session != '')
{
  //checks if you have logged in, if not it will redirect you to login page
  $loggedIn = "<a id = 'lgo' href='logout.php'>Logout </a>" ;
}

else
{
header('Location: https://students.emps.ex.ac.uk/yh405/coursework/utils/login.php');
}

 ?>
