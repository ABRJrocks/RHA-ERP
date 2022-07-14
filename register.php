<?php

include 'connection.php';
error_reporting(0);
$fnameerror ="";
$lnameerror ="";
$emailerror ="";
$passerror ="";
if(empty($_POST['fname'])){ $fnameerror = "Please Enter First Name <br>";}
if(empty($_POST['lname'])){ $lnameerror = "Please Enter Last Name<br>";}
if(empty($_POST['email'])){ $emailerror = "Please Enter Email<br>";}
if(empty($_POST['pass'])){ $passerror = "Please Enter Password<br>";}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO register (fname, lname, email, pass) VALUES ('$fname', '$lname', '$email', '$pass')";
if(count($_POST)>0){
    if(mysqli_query($conn,$sql))
    {
        ?>
               <script>
        alert("Account Created Successfully!")
        window.open("http://localhost/rha-erp/login.php","_self")

    </script>
        <?php
        

    }
    else
    {
        echo"Error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="Post">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="fname" id="fname" type="text" placeholder="Enter Your First Name" />
                                                        <label for="fname">First name</label>
                                                    </div>
                                                    <div><?php if($fnameerror!="") { echo "<div class='alert alert-danger'>" . $fnameerror . "</div>"; } ?></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="lname" id="lname" type="text" placeholder="Enter Your Last Name" />
                                                        <label for="lname">Last name</label>
                                                    </div>
                                                    <div><?php if($lnameerror!="") { echo "<div class='alert alert-danger'>" . $lnameerror . "</div>"; } ?></div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                                                <label for="email">Email address</label>
                                                <div><?php if($emailerror!="") { echo "<div class='alert alert-danger'>" . $emailerror . "</div>"; } ?></div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="pass" id="pass" type="password" placeholder="Create a password" />
                                                        <label for="pass">Password</label>
                                                    </div>
                                                    <div><?php if($passerror!="") { echo "<div class='alert alert-danger'>" . $passerror . "</div>"; } ?></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-3 bg-light mt-auto">
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

