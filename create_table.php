<?php

require('connection.php');
//SQL to create the users table
$sql = "CREATE TABLE users (
id INTEGER PRIMARY KEY auto_increment ,
username VARCHAR (30) ,
password VARCHAR (100),
UNIQUE (username)
);" ;

if ($conn->query($sql) === TRUE)
{
    echo "Table users created successfully";
}
else
{
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
