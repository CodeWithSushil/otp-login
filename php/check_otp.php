<?php
require_once("./config.php");

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['otp']) && isset($_SESSION['is_email'])){
  
  $otp = mysqli_real_escape_string($conn, $_POST['otp']);
  $email = $_SESSION['is_email'];
  
  $sql = "SELECT * FROM users WHERE email='$email' AND otp='$otp';";
  $res = mysqli_query($conn, $sql);
  
  if(mysqli_num_rows($res) > 0){
    $req = "UPDATE users SET otp='' WHERE email='$email';";
    $sqlRes = mysqli_query($conn, $req);
    
    if($sqlRes){
      $_SESSION['is_login']=$email;
      echo "yes";
    }
  } else {
    echo "not";
  }
}
