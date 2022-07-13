<?php require 'connection.php';
$id = $_GET['sap_id'];
$select = "SELECT fname, lname FROM std where sap_id = $id;";
$data = mysqli_query($conn, $select) or die(mysqli_error($conn));
$res = mysqli_fetch_array($data);


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
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">RHA Solutions</a>
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
                    <li><a class="dropdown-item" href="login.html">Logout</a></li>
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
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Serivces</div>
                        <a class="nav-link collapsed" href="sassign_course.php">
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
                        <a class="nav-link collapsed" href="courses.html">
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
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="text-center">
                    <h2 style="color: rgb(79, 10, 241);">Enroll Student</h2>
                </div>
                <div class="row justify-content-center my-5">
                    <!-- FORM -->
                    <?php
                    $select_crs = "SELECT c_id, c_name FROM course";
                    $data_crs = mysqli_query($conn, $select_crs) or die(mysqli_error($conn));
                    $rows = mysqli_num_rows($data_crs);

                    ?>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <div class="form-floating my-5">

                                <div class="text-center">
                                    <h2 style="color: rgb(79, 10, 241);"><?php echo $res['fname'] ?> <?php echo $res['lname'] ?></h2>
                                </div>
                                <div>

                                    <label for="course" class="form-label">Course 1</label>
                                    <select name="c_id1" id="course1" class="form-select" style="margin-bottom: 20px;">
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
                                <button value="enroll" type="submit" name="enroll-btn" class="btn btn-primary" style="background-color: rgb(75, 48, 226)">Enroll</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>