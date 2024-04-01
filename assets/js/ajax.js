function send_otp(){

  const email = $("#email").val();

  $.ajax({
    url: "php/send_otp.php",
    type: "POST",
    data: "email=" + email,
    success: function (result) {
      if (result == "yes") {
        $(".box2").show();
        $(".box1").hide();
      }

      if(result == "empty"){
        $("#msg").html("Please enter your email.");
        $("#msg").toggle();
      }

      if(result == "invalid"){
        $("#msg").html("Invalid your email.");
        $("#msg").hide(4000);
      }

      if (result == "not") {
        $("#msg").html("Your email not registered.");
        $("#msg").hide(4000);
      }
      console.log(result);
    },
  });
}


function check_otp() {
  
  const otp = $("#otp").val();

  $.ajax({
    url: "php/check_otp.php",
    type: "POST",
    data: "otp=" + otp,
    success: function (data) {
      if(data == 'sent'){
        window.location.href="pages/home.php";
      }

      if(data == 'not'){
        $("#error").html("Please enter valid OTP.");
        $("#msg").hide(4000);
      }
      console.log(data);
    },
  });
}
