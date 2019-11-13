<?php
require("connection.php") ;

deleteTable($conn) ;

function deleteTable($conn)
{
    $sql ="drop table stocks" ;
    if ($conn->query($sql) === TRUE)
    {
      echo "Table stocks successfully deleted";
    }
    else
    {
      echo "Error deleting Table: " . $conn->error;
    }
  $conn->close();
}

?>
