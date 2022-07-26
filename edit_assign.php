<?php include 'connection.php';
session_start();
$id = $_GET['t_id'];
$select = "SELECT CONCAT(f_name, ' ', l_name) AS name  FROM teach WHERE t_id=$id";
$data = mysqli_query($conn, $select) or die( mysqli_error($conn));
$row1 = mysqli_fetch_array($data);

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
            <form action="" method="POST">
              <div class="form-floating my-5">
                <input disabled name="name" type="name" id="name" class="form-control"  value="<?php echo $row1['name']; ?>"/>
                <label for="name" class="form-label">Full Name</label>
              </div>

              <label for="course" class="form-label">Course</label>
              <select name="c_id" id="course" class="form-select" style="margin-bottom: 20px;">
              <option disabled selected value> -- Select Course -- </option>
                <?php
                $query = "SELECT * FROM course";
                $data1 = mysqli_query($conn,$query);
                $res1 = mysqli_num_rows($data1);
                if ($res1) {
                  while ($res1 = mysqli_fetch_array($data1)) {
                    $course_name = $res1['c_name'];
                    $course_id = $res1['c_id'];
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
              <button name="update-btn" class="btn btn-primary" style="background-color:#34495e">Update</button>
              <a href="index.html" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
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
if (isset($_POST['update-btn'])) {
    $course = $_POST['c_id'];
    $lecture = $_POST['c_num'];
    $update = "UPDATE assign_course SET c_id='$course', c_num='$lecture' WHERE t_id=$id";
    $data = mysqli_query($conn, $update);
    if ($data) {
?>
        <script>
            alert("Data Updated")
            window.open("http://localhost/rha-erp/teacher_list.php", "_self")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Please Try Again")
            window.open("http://localhost/rha-erp/teacher_list.php", "_self")
        </script>
<?php
    }
}
?>