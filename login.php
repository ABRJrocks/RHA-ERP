<?php
require 'connection.php';
error_reporting(0);
    session_start();
    $message="";
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql= "SELECT * FROM register WHERE email='$email' and pass ='$pass'";
    if(count($_POST)>0) {
        $result = mysqli_query($conn,$sql);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["fname"] = $row['fname'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["fname"])) {
    header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <!--nav bar-->
          <nav class="navbar">
            <div class="container-fluid">
            <a class="navbar-brand ps-3" href="index.php" style="font-family:Pacifico,cursive; 
            color: #34495e">RHA Solutions</a>
            </div>
          </nav>
          <br /><br /><br />

          <div class="text-center">
            <h2 style="color:#34495e">Login to Your Account</h2>
          </div>
          <!--form-->
          <div class="row justify-content-center my-5">
            <div class="col-lg-6">
              <form method="post">
                <div><?php if($message!="") { echo "<div class='alert alert-danger'>" . $message . "</div>"; } ?></div>
                <div class="form-floating my-5">
                  <input
                    type="email"
                    name="email"
                    class="form-control"
                    id="email"
                    placeholder="example@mail.com"
                  />
                  <label class="form-label">Email:</label>
                </div>

                <div class="form-floating my-5">
                  <input
                    type="password"
                    name="pass"
                    class="form-control"
                    id="password"
                    placeholder="xxxxxxxxx"
                  />
                  <label class="form-label">Password:</label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                  <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                  <a class="small" href="password.html">Forgot Password?</a>
                  <button type='submit' class= 'btn btn-primary' style="background-color:#34495e">Login</button>
              </div>
                
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-5" style="background-color:  #34495e">
          <button
            type="button"
            class="btn-close btn-close-white"
            aria-label="Close"
            id="close_btn"
          ></button>
          <br /><br /><br />
          <br /><br /><br />

          <div class="text-center">
            <h2 style="color: white">New Here</h2>
            <div class="lead" style="color: white">
              Sign up and<br />
              make things easy
            </div>
            <br />
            <a href="register.php">
              <button
                type="button"
                class="btn btn-outline-light btn-rounded"
                data-mdb-ripple-color="dark"
              >
                Sign up
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="layoutAuthentication_footer">
      <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
              <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">Copyright &copy; RHA SOLUTION</div>
                  <div>
                      <a href="#">Privacy Policy</a>
                      &middot;
                      <a href="#">Terms &amp; Conditions</a>
                  </div>
              </div>
          </div>
      </footer>
  </div>

    <script>
      window.onload = () => {
        document.getElementById("close_btn").onclick = function () {
          this.parentNode.remove();
          return false;
        };
      };
    </script>

  </body>
</html>
