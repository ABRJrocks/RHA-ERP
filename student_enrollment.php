<?php require 'connection.php';
error_reporting (0);
$id = $_GET['sap_id'];
$select = "SELECT fname, lname FROM std where sap_id = $id;";
$data = mysqli_query($conn, $select) or die(mysqli_error($conn));
$res = mysqli_fetch_array($data);
session_start();
error_reporting(0);
if($_SESSION["fname"]) {


if (isset($_POST['enroll-btn'])) {

    $sap_id = $id;
    $name = $res['fname'];
    $name .= " ";
    $name .= $res['lname'];
    $c_id1 = $_POST['c_id1'];
    $c_id2 = $_POST['c_id2'];
    $c_id3 = $_POST['c_id3'];
    $c_id4 = $_POST['c_id4'];
    $c_id5 = $_POST['c_id5'];
    $c_id6 = $_POST['c_id6'];

    $sql = "INSERT INTO std_enroll_course (sap_id, std_name, crs1, crs2, crs3, crs4, crs5, crs6) VALUES ('$sap_id', '$name', '$c_id1', '$c_id2', '$c_id3', '$c_id4', '$c_id5', '$c_id6')";

    if (isset($_POST["enroll-btn"])) {
        if (mysqli_query($conn, $sql)) {
?>
            <script>
                alert("Student Enrolled!")
                window.open("http://localhost/rha-erp/student_enrollment_search.php", "_self")
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Please Try Again!")
                window.open("http://localhost/rha-erp/student_enrollment_search.php", "_self")
            </script>
<?php
        }
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
    <title>Dashboard-RHA Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script>  
function validateform(){  
    var c_id1=document.myform.c_id1.value;
    var c_id2=document.myform.c_id2.value;
    var c_id3=document.myform.c_id3.value;
    var c_id4=document.myform.c_id4.value;
    var c_id5=document.myform.c_id5.value;
    var c_id6=document.myform.c_id6.value;
if (c_id1==null || c_id1==""){  
  alert("Please Select Course 1");  
  return false;  
}
else if (c_id2==null || c_id2==""){  
  alert("Please Select Course 2");  
  return false;  
}
else if (c_id3==null || c_id3==""){  
  alert("Please Select Course 3");  
  return false;  
}
else if (c_id4==null || c_id4==""){  
  alert("Please Select Course 4");  
  return false;  
}
else if (c_id5==null || c_id5==""){  
  alert("Please Select Course 5");  
  return false;  
}
else if (c_id6==null || c_id6==""){  
  alert("Please Select Course 6");  
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
                    <h2 style="color:#34495e">Enroll Student</h2>
                </div>
                <div class="row justify-content-center my-5">
                    <!-- FORM -->
                    <?php
                    $select_crs = "SELECT c_id, c_name FROM course";
                    $data_crs = mysqli_query($conn, $select_crs) or die(mysqli_error($conn));
                    $rows = mysqli_num_rows($data_crs);

                    ?>
                    <div class="col-lg-6">
                        <form action="" method="post" name="myform"  onsubmit="return validateform()">
                            <div class="form-floating my-5">

                                <div class="text-center">
                                    <h2 style="color:#34495e"><?php echo $res['fname'] ?> <?php echo $res['lname'] ?></h2>
                                </div>
                                <div>

                                    <label for="course" class="form-label">Course 1</label>
                                    <select name="c_id1" id="course1" class="form-select" style="margin-bottom: 20px;">
                                    <option disabled selected value> -- Select Course 1 -- </option>
                                        <?php
                                        if ($rows != 0) {
                                            while ($res_crs = mysqli_fetch_array($data_crs)) {
                                                echo '<option value="' . $res_crs['c_id'] . ' ">' . $res_crs['c_name'] . '</option>';
                                            }
                                            mysqli_data_seek($data_crs, 0);
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>

                                    <label for="course" class="form-label">Course 2</label>
                                    <select name="c_id2" id="course2" class="form-select" style="margin-bottom: 20px;">
                                    <option disabled selected value> -- Select Course 2-- </option>
                                        <?php
                                        if ($rows != 0) {
                                            while ($res_crs = mysqli_fetch_array($data_crs)) {
                                                echo '<option value="' . $res_crs['c_id'] . ' ">' . $res_crs['c_name'] . '</option>';
                                            }
                                            mysqli_data_seek($data_crs, 0);
                                        }
                                      ?>
                                    </select>
                                </div>
                                <div>

                                    <label for="course" class="form-label">Course 3</label>
                                    <select name="c_id3" id="course3" class="form-select" style="margin-bottom: 20px;">
                                    <option disabled selected value> -- Select Course 3 -- </option>
                                       <?php
                                        if ($rows != 0) {
                                            while ($res_crs = mysqli_fetch_array($data_crs)) {
                                                echo '<option value="' . $res_crs['c_id'] . ' ">' . $res_crs['c_name'] . '</option>';
                                            }
                                            mysqli_data_seek($data_crs, 0);
                                        } 
                                        ?>
                                    </select>
                                </div>
                                <div>

                                    <label for="course" class="form-label">Course 4</label>
                                    <select name="c_id4" id="course4" class="form-select" style="margin-bottom: 20px;">
                                    <option disabled selected value> -- Select Course 4 -- </option>
                                        <?php
                                        if ($rows != 0) {
                                            while ($res_crs = mysqli_fetch_array($data_crs)) {
                                                echo '<option value="' . $res_crs['c_id'] . ' ">' . $res_crs['c_name'] . '</option>';
                                            }
                                            mysqli_data_seek($data_crs, 0);
                                        } 
                                        ?>
                                    </select>
                                </div>
                                <div>

                                    <label for="course" class="form-label">Course 5</label>
                                    <select name="c_id5" id="course5" class="form-select" style="margin-bottom: 20px;">
                                    <option disabled selected value> -- Select Course 5 -- </option>
                                        <?php
                                        if ($rows != 0) {
                                            while ($res_crs = mysqli_fetch_array($data_crs)) {
                                                echo '<option value="' . $res_crs['c_id'] . ' ">' . $res_crs['c_name'] . '</option>';
                                            }
                                            mysqli_data_seek($data_crs, 0);
                                        } 
                                        ?>
                                    </select>
                                </div>
                                <div>

                                    <label for="course" class="form-label">Course 6</label>
                                    <select name="c_id6" id="course6" class="form-select" style="margin-bottom: 20px;">
                                    <option disabled selected value> -- Select Course 6 -- </option>
                                        <?php
                                        if ($rows != 0) {
                                            while ($res_crs = mysqli_fetch_array($data_crs)) {
                                                echo '<option value="' . $res_crs['c_id'] . ' ">' . $res_crs['c_name'] . '</option>';
                                            }
                                            mysqli_data_seek($data_crs, 0);
                                        }
                                        ?>
                                    </select>
                                </div>
                                <br>
                                <button value="enroll" type="submit" name="enroll-btn" class="btn btn-primary" style="background-color:#34495e">Enroll</button>
                                <a href="student_enrollment_search.php" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
                        </form>
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