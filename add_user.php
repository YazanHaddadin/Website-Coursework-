<?php
require("connection.php") ;


$user = "website" ;
$pass = "coursework" ;
addUsers($conn, $user, $pass) ;

function addUsers($conn, $user, $pass)
{
  $rand = openssl_random_pseudo_bytes(48);
  $salt = '$2a$%13$' . strtr(base64_encode($rand), array('_' => '.', '~' => '/'));

  //This is the hashed password which would be stored in our db
  $hashed_password = crypt($pass, $salt);

  $sql = "INSERT INTO users (id, username, password)
  VALUES (NULL , '$user' , '$hashed_password')" ;

  if ($conn->multi_query($sql) === TRUE)
  {
      echo "New records created successfully <br />";
  }
  else
  {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
  }
}


?>
