<?php
require_once("./config.php");

if(isset($_POST['email']) && $_SERVER["REQUEST_METHOD"] == "POST"){
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  if(!empty($email)){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === true){
      echo "invalid";
    } else {
      $sql = "SELECT * FROM users WHERE email='$email';";
      $res = mysqli_query($conn, $sql);

      if(mysqli_num_rows($res) > 0){
        $otp = rand(111111,999999);
        $req = "UPDATE users SET otp='$otp' WHERE email='$email';";
        $reqSql = mysqli_query($conn, $req);
        
        if($reqSql){
          $_SESSION['is_email']=$email;
          $html = "Your OTP Verification code is: <b><i>$otp</i></b>.";
          $subject = "OTP Verification";
          require_once("./send_mail.php");
        } else{
          echo "invalid";
        }
      } else {
        echo "not";
      }
    }
  }else{
    echo "empty";
  }
}
