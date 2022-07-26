<?php
error_reporting (0);
include 'connection.php';
session_start();
if($_SESSION["fname"]) { 
$query = "SELECT p_id, p_name FROM post";
$data = mysqli_query($conn, $query)  or die(mysqli_error($conn));
$res = mysqli_num_rows($data);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Register Teachers</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <script>  
function validateform(){  
var fname=document.myform.fname.value;
var lname=document.myform.lname.value;
var email=document.myform.fname.value;  
var pass=document.myform.pass.value;  
var cpass=document.myform.cpass.value;
if (fname==null || fname==""){  
  alert("Please Enter First Name");  
  return false;  
}
else if (lname==null || name==""){  
  alert("Please Enter Last Name");  
  return false;  
}
else if (email==null || email==""){  
  alert("Please Enter Email");  
  return false;  
}
else if(p_id== null || p_id=""){  
  alert("Please Select Teacher's Post");  
  return false;  
  }
}  
</script>  
</head>

<body class="sb-nav-fixed">
<?php include ('header.php'); ?>
    <div id="layoutSidenav_content">
      <main>
        <div class="text-center">
          <h2 style="color:#34495e">Register Teachers</h2>
        </div>
        <!--form-->
        <div class="row justify-content-center my-5">
          <div class="col-lg-6">
          <form action="" method="post" name="myform"  onsubmit="return validateform()">
          <div class="form-floating my-5">
            <input
            name="fname"
              type="name"
              id="fname"
              placeholder="e.g. Muhammad"
              class="form-control"
            />
            <label for="name" class="form-label">First Name:</label>
          </div>

          <div class="form-floating my-5">
            <input
            name="lname"
              type="name"
              class="form-control"
              id="lname"
              placeholder="e.g Ahmad"
            />
            <label  for="lname" class="form-label">Last Name:</label>
          </div>
          <div class="form-floating my-5">
            <input
              name="email"
              type="text"
              class="form-control"
              id="email-std"
              placeholder="Example@rhaerp.com"
            />
            <label  name="email" class="form-label">Email</label>
          </div>

          <label for="post" class="form-label">Post</label>
              <select name="p_id" id="post" class="form-select" style="margin-bottom: 20px;">
              <option disabled selected value> -- Teacher Post -- </option>
                <?php
                if ($res) {
                  while ($res = mysqli_fetch_array($data)) {
                    $post_name = $res['p_name'];
                    $post_id = $res['p_id'];
                    echo '<option value="' . $post_id . ' ">' . $post_name . '</option>';
                  }
                }
                ?>
              </select>
            <br>
            <button value="register" name="register" type="submit" class="btn btn-primary" style="background-color:#34495e">Register</button>
            <a href="index.php" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
        </form>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; RHA Solutions 2022</div>
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
  <?php 
}
else {
  include ('login.php');
}
 ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$post = $_POST['p_id'];
$email = $_POST['email'];

$sql = "INSERT INTO teach (f_name, l_name, email,p_id) VALUES ('$fname', '$lname', '$email', '$post')";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        ?>   
        <script>
        alert("Teacher Registered!")
        window.open("http://localhost/rha-erp/teach_register.php","_self")

    </script>
        <?php
    }
    else
    {
        ?>   
        <script>
        alert("Teacher Not Registered Due to Error Try Again!")
        window.open("http://localhost/rha-erp/teach_register.php","_self")

    </script>
        <?php
    }
}
?>