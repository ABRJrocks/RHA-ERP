<?php include 'connection.php';
session_start();
$id = $_GET['c_id'];
$select = "SELECT * FROM course WHERE c_id=$id";
$data = mysqli_query($conn, $select) or die( mysqli_error($conn));
$row = mysqli_fetch_array($data);
if($_SESSION["fname"]) { 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php include ('header.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <!--form-->
                    <div class="row justify-content-center my-5">
                        <div class="col-lg-6">
                            <div class="text-center">
                                <h2 style="color: rgb(79, 10, 241);">Edit Course Data</h2>
                            </div>
                            <form action="" method="POST">
              <div class="form-floating my-5">
                <input type="name" name="course" id="name" placeholder="OOP" class="form-control" value="<?php echo $row['c_name'] ?>"/>
                <label for="name" class="form-label">Course Name</label>
              </div>

              <div class="form-floating my-5">
                <input type="number" name="crh" class="form-control" id="crh" placeholder="e.g Sajid" value="<?php echo $row['crh'] ?>" />
                <label for="crh" class="form-label">Credit Hours</label>
              </div>
              <label name="Semester" for="Semester" class="form=label">Semester</label>
              <select name="Semester" id="Semester" class="form-select" value="<?php echo $row['semester'] ?>">
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
              <button value="Update" name="update-btn" class="btn btn-primary" style="background-color: rgb(75, 48, 226)">Update</button>
              <a href="index.php" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
            </form>
                        </div>
                    </div>
                </div>

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
if (isset($_POST['update-btn'])) {
    $c_name = $_POST['course'];
    $crh = $_POST['crh'];
    $semester = $_POST['Semester'];
    $update = "UPDATE course SET c_name='$c_name', crh='$crh', semester='$semester' WHERE c_id=$id";
    $data = mysqli_query($conn, $update);
    if ($data) {
?>
        <script>
            alert("Data Updated")
            window.open("http://localhost/rha-erp/display_course.php", "_self")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Please Try Again")
            window.open("http://localhost/rha-erp/display_course.php", "_self")
        </script>
<?php
    }
}
?>