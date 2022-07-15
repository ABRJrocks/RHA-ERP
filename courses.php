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
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">RHA Solutions</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Home</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Serivces</div>
            <a class="nav-link collapsed" href="st_register.php">
              Student Data
            </a>
            <a class="nav-link collapsed" href="assign_course.php">
              Teacher Data
            </a>
            <a class="nav-link collapsed" href="timetable.html">
              Time Table
            </a>
            <a class="nav-link collapsed" href="datesheet.html">
              Datesheet
            </a>
            <a class="nav-link collapsed" href="database.html">
              Find Record
            </a>
            <a class="nav-link collapsed" href="courses.php">
              Add Course
            </a>
            <div class="sb-sidenav-menu-heading">Contact</div>
            <a class="nav-link" href="feedback.html">
              <div class="sb-nav-link-icon"><i class="feedback-menu"></i></div>
              Feedback
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $_SESSION["fname"];?>
            </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="text-center">
          <h2 style="color: rgb(79, 10, 241);">Enter Course Information</h2>
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
              <button name="register" type="submit" class="btn btn-primary" style="background-color: rgb(75, 48, 226)">Register</button>
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
    ?><h1>Please Login to continue.Press <a href="login.php">Here<a></h1><?php
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