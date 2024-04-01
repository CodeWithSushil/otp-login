<?php
$host = "localhost:3306";
$user = "root";
$pass = "root";
$db = "otplogin";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
  echo "Connection: ". mysqli_connect_error();
  mysqli_close($conn);
} else{
  session_start();
}
