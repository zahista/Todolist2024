<?php 


use mysqli;

$mysqli = new mysqli("127.0.0.1","root","","todoapp");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM todos";
$result = $mysqli->query($sql);

// Associative array
$todos = $result->fetch_all(MYSQLI_ASSOC);

// Free result set
$result -> free_result();

$mysqli -> close();
