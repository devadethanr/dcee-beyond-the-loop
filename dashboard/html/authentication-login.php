
<?php
session_start();

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Dummy credentials
    $admin_username = "admin@gmail.com";
    $admin_password = "1234";

    // Retrieve username and password from form
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Check if username and password match admin credentials
    if ($username == $admin_username && $password == $admin_password) {
        // Authentication successful, redirect to dashboard or any other page
        $_SESSION['username'] = $username; // Storing username in session variable
        header("Location: index.html");
        exit();
    } else {
        // Authentication failed, display error message
        $error_message = "Invalid username or password";
    }
}
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from themewagon.github.io/Modernize/src/html/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2024 16:11:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form method='POST' >
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password"  name='password' class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="index.html">Forgot Password ?</a>
                  </div>
                  <input type='submit'  name='submit' value='Login'class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                    <a class="text-primary fw-bold ms-2" href="authentication-register.html">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>


<!-- Mirrored from themewagon.github.io/Modernize/src/html/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2024 16:11:25 GMT -->
</html>
