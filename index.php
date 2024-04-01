<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet"/>
    <title>OTP Login</title>
    <style type="text/css">
.box2 {
  display: none;
}
    </style>
<script src="./assets/js/eruda.js"></script>
<script>
eruda.init();
</script>
  </head>
  <body>
    <div class="container my-5">
      <div class="row">
        <div class="mx-auto col-lg-6 col-md-6 col-12">
          <div class="card box1">
            <div class="card-body">
              <h2 class="card-title text-danger text-center"> OTP LOGIN</h2>
              <form method="post" autocomplete="off" id="myForm">
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"/>
                </div>
                <div class="mb-3 text-danger text-capitalize" id="msg"></div>
                <button type="button" class="btn btn-primary" onclick="send_otp()">Send OTP</button>
              </form>
            </div>
          </div>
          
          <div class="card box2">
            <div class="card-body">
              <h2 class="card-title text-danger text-center"> OTP LOGIN </h2>
              <form method="post" autocomplete="off" id="myForm">
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">OTP:</label>
                  <input type="email" class="form-control" id="otp" placeholder="Enter OTP" name="otp"/>
                </div>
                <div class="mb-3 text-danger text-capitalize" id="error"></div>
                <button type="button" class="btn btn-primary" onclick="check_otp()">Send OTP</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/ajax.js"></script>
  </body>
</html>
