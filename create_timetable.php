<?php
error_reporting(0);
include 'connection.php';
session_start();
if ($_SESSION["fname"]) {
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
    <?php include('header.php'); ?>
    <div id="layoutSidenav_content">

      <main>
        <div class="text-center">
          <h2 style="color:#34495e">Assign Course to Slot</h2>
        </div>
        <!--form-->


        <div class="row justify-content-center my-5">
          <div class="col-lg-6">
            <!-- form part 1 -->

            <div id="tt-form-part-1">
              <form action="" method="GET" name="formtt">

                <label for="Day" class="form=label">Select Day </label>
                <select name="day" id="day" class="form-select" required>
                  <option disabled selected value> -- Select Day -- </option>
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednsday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                </select>

                <label for="timeslot" class="form=label">Select Timeslot</label>
                <select name="timeslot" id="timeslot" class="form-select" required>
                  <option disabled selected value> -- Select Timeslot -- </option>
                  <option value="1">8:00 - 9:30</option>
                  <option value="2">9:30 - 11:00</option>
                  <option value="3">11:00 - 12:30</option>
                  <option value="4">1:00 - 2:30</option>
                  <option value="5">2:30 - 4:00</option>
                  <option value="6">4:00 - 5:30</option>
                </select>
                <label for="course" class="form-label">Course</label>
                <select name="c_id" id="course" class="form-select" style="margin-bottom: 20px;" required>
                  <option disabled selected value> -- Select Course -- </option>
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
                <br>
                <button id="proceed" name="proceed" class="btn btn-primary" style="background-color:#34495e">Next</button>
                
                <a href="index.php" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
              </form>
            </div>


            <!-- 2nd Form -->
            <?php
            if (isset($_GET['proceed'])) {
            ?>
            <Script>
              document.getElementById("tt-form-part-1").style.display = "none";
            </Script>
            <form action="" method="POST" name="tt-form-part-2">
              <label for="teacher" class="form-label">Select Teacher</label>
              <select name="teacher" id="teacher" class="form-select" style="margin-bottom: 20px;" required>
                <option disabled selected value> -- Select Teacher -- </option>
                <?php
                $cid = $_GET['c_id'];
                $query2 = "SELECT t.t_id, CONCAT(t.f_name, ' ', t.l_name) AS name From teach t INNER JOIN assign_course ac ON t.t_id = ac.t_id AND ac.c_id = $cid";
                $sql = mysqli_query($conn, $query2);
                while ($res = mysqli_fetch_array($sql)) {
                  $t_name = $res['name'];
                  $t_id = $res['t_id'];
                  echo '<option value="' . $t_id . ' ">' . $t_name . '</option>';
                }
                ?>
              </select>
              <label for="room" class="form=label">Select Room No.</label>
              <select name="room" id="room" class="form-select" required>
                <option disabled selected value> -- Select Room -- </option>
                <option value="201">201</option>
                <option value="202">202</option>
                <option value="203">203</option>
                <option value="204">204</option>
                <option value="205">205</option>
                <option value="206">206</option>
              </select>
              <br>
              <button type="submit" name="register" class="btn btn-primary" style="background-color:#34495e">Register</button>
              <a href="index.php" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
              </form>
            <?php
            }
            ?>

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
} else {
  include('login.php');
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

  require('connection.php');
  $day = $_GET['day'];
  $c_id = $_GET['c_id'];
  $timeslot = $_GET['timeslot'];
  $room = $_POST['room'];
  $teacher = $_POST['teacher'];

  $sql = "INSERT INTO timetable (day,Timeslot,room, c_id,t_id) VALUES ('$day', '$timeslot','$room', '$c_id',$teacher)";

  if (isset($_POST["register"])) {
    if (mysqli_query($conn, $sql)) {
  ?>
      <script>
        alert("Slot Assigned!")
        window.open("http://localhost/rha-erp/Create_timetable.php", "_self")
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Please Try Again!")
        window.open("http://localhost/rha-erp/Create_timetable.php", "_self")
      </script>
  <?php
    }
  }

  ?>