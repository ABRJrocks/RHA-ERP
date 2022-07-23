<?php
session_start();
error_reporting(0);
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
    <title>Dashboard-RHA Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

<?php include ('header.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <div class="row">
                        <div class="col col-md-1"></div>
                        <div class="col col-md-2">
                            <div class="card" style="width: 18rem; ">
                                <img src="assets/1st.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Time Table</h5>
                                    <p class="card-text">Click on the button below to draw a time table according to
                                        your need.</p>
                                    <a href="create_timetable.php" class="btn btn-primary">Continue</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-dash col-md-1"></div>
                        <div class="col col-md-2">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/2nd.jpg" style="height: 193px;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Teachers List</h5>
                                    <p class="card-text">Click on the button below to make datesheet of different exams.
                                    </p>
                                    <a href="teacher_list.php" class="btn btn-primary">continue</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-dash col-md-1"></div>
                        <div class="col col-md-2">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/3rd.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Find Record</h5>
                                    <p class="card-text">Click on the button below to find data of any student or
                                        teacher.</p>
                                    <a href="database.html" class="btn btn-primary">Continue</a>
                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
