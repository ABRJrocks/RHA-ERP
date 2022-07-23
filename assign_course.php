<?php
include 'connection.php';
session_start();
if($_SESSION["fname"]) { 
$query = "SELECT c_id, c_name from course";
$data = mysqli_query($conn, $query);
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
          <h2 style="color: rgb(79, 10, 241);">Assign Course</h2>
        </div>
        <!--form-->
        <div class="row justify-content-center my-5">
          <div class="col-lg-6">
            <form action="assigcrs.php" method="POST">
            <label for="course" class="form-label">Course</label>
              <select name="c_id" id="course" class="form-select" style="margin-bottom: 20px;">
                <?php
                if ($res) {
                  while ($res = mysqli_fetch_array($data)) {
                    $course_name = $res['c_name'];
                    $course_id = $res['c_id'];
                    echo '<option value="' . $course_id . ' ">' . $course_name . '</option>';
                  }
                }
                ?>
              </select>

              <label for="course" class="form-label">Course</label>
              <select name="c_id" id="course" class="form-select" style="margin-bottom: 20px;">
                <?php
                if ($res) {
                  while ($res = mysqli_fetch_array($data)) {
                    $course_name = $res['c_name'];
                    $course_id = $res['c_id'];
                    echo '<option value="' . $course_id . ' ">' . $course_name . '</option>';
                  }
                }
                ?>
              </select>

              <label for="num_of_lec" class="form=label">Number of Lectures</label>
              <select name="c_num" id="num_of_lec" class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <br>
              <button name="register" class="btn btn-primary" style="background-color: rgb(75, 48, 226)">Register</button>
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