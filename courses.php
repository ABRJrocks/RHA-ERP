<?php
require ('connection.php');
session_start();
error_reporting(0);
if($_SESSION["fname"]) { 
?>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard-RHA Solutions</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php include ('header.php'); ?>
    <div id="layoutSidenav_content">
      <main>
        <div class="text-center">
          <h2 style="background-color:#34495e">Enter Course Information</h2>
        </div>
        <!--form-->
        <form action="courses.php" method="POST">
              <div class="form-floating my-5">
                <input type="name" name="course" id="name" placeholder="OOP" class="form-control" />
                <label for="name" class="form-label">Course Name</label>
              </div>

              <div class="form-floating my-5">
                <input type="number" name="crh" class="form-control" id="crh" placeholder="e.g Sajid" />
                <label for="crh" class="form-label">Credit Hours</label>
              </div>
              <label name="Semester" for="Semester" class="form=label">Semester</label>
              <select name="Semester" id="Semester" class="form-select">
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
              </select>
              <br>
              <button name="register" type="submit" class="btn btn-primary" style="background-color:#34495e">Register</button>
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
$c_name = $_POST['course'];
$crh = $_POST['crh'];
$semester = $_POST['Semester'];

$sql = "INSERT INTO course (c_name, crh, semester) VALUES ('$c_name', '$crh', '$semester')";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        ?>   
        <script>
        alert("Course Added!")
        window.open("http://localhost/rha-erp/courses.html","_self")
    </script>
        <?php
    }
    else
    {
        echo"Error";
    }
}

?>