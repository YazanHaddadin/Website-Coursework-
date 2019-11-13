<?php

require('connection.php');
//SQL to create table stocks
$sql = "CREATE TABLE stocks (
id INTEGER PRIMARY KEY auto_increment ,
game VARCHAR (100),
type VARCHAR (30),
age_group INTEGER,
quantity INTEGER

UNIQUE(game)
);" ;

if ($conn->query($sql) === TRUE)
{
    echo "Table stocks created successfully";
}
else
{
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
