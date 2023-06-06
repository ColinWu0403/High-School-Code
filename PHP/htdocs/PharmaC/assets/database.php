<?php

// How to Connect to PHPmyadmin Database

function dbconnect(){
  //database variables
  $dbhost = "localhost";//127.0.0.1 defaults to localhost
  $dbuser = "root";//the user is set in phpmyadmin
  $dbpass = "";//the password for that user to gain access to the db
  $db = "shop1";//the name of the database we are trying to access

  //Connect to phpmyadmin
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db,) or die("Connect failed: %s\n". $conn -> error);

  return $conn;
}

//Close connection to database
function dbclose($conn){
  $conn->close();
}

//Close database object
function closedatabase($conn){
  $conn->close();
}

//Get database rows
function getRows($result){
  $rows = [];
  while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
  }
  return $rows;
}
?>
