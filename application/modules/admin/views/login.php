<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <link href="css/admin.css" rel="stylesheet" type="text/css">
</head>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9 login-card">
        <div id="contact" class="contact_wrapper">
          <div class="text-center">
              <h2 class="section_title">Admin Login</h2>
          </div>

          <div class="col-12">
            <form id="contact-form" action="">
                <div class="row">
                    <div class="col-md-12">
                        <!-- input field for EMAIL -->
                        <input class="input_field required" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <!-- input field for MESSAGE -->
                        <input class="input_field required" type="pasword" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- button for MESSAGE-SEND -->
                        <button class="button slide-vertical" type="submit" data-splitting>Login</button>
                    </div>
                </div>
            </form>
          </div>
          <!-- end contact form -->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
</html>
