<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Enrolled Courses</title>
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
                        <a class="nav-link collapsed" href="assign_course.php">
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
                <div class="container-fluid px-4">
                    <!-- Search Bar -->
                    <form action="search.php" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div style="margin-bottom: 20px;" class="input-group">
                            <input class="form-control" name="search" value="" type="number" placeholder="Enter SAP ID" />
                            <button class="btn btn-primary" id="std-search" type="submit"> <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SAP ID</th>
                                <th scope="col">Name</th>
                                <th scope="cod">Course 1</th>
                                <th scope="cod">Course 2</th>
                                <th scope="cod">Course 3</th>
                                <th scope="cod">Course 4</th>
                                <th scope="cod">Course 5</th>
                                <th scope="cod">Course 6</th>
                                <th scope="cod">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- PHP CODE -->
                            <?php

                            $queryc1 = "SELECT s.sap_id, s.std_name, course.c_name FROM std_enroll_course s INNER JOIN course where s.crs1 = course.c_id";
                            $datac1 = mysqli_query($conn, $queryc1) or die(mysqli_error($conn));
                           
                            while ($row = mysqli_fetch_array($datac1)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['sap_id']; ?></th>
                                    <td><?php echo $row['std_name'] ?></td>
                                    <td><?php echo $row['c_name']; ?></td>
                                    <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_student.php?sap_id=<?php echo $row['sap_id']; ?>">Edit</a></button></td>
                                </tr>
                            <?php
                            }
                            
                            $queryc2 = "SELECT s.sap_id, s.std_name, course.c_name FROM std_enroll_course s INNER 
                            JOIN course where s.crs2 = course.c_id";
                            $datac2 = mysqli_query($conn, $queryc2) or die(mysqli_error($conn));
                            while ($row = mysqli_fetch_array($datac2)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['sap_id']; ?></th>
                                        <td><?php echo $row['std_name'] ?></td>
                                        <td><?php echo $row['c_name']; ?></td>
                                        <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_student.php?sap_id=<?php echo $row['sap_id']; ?>">Edit</a></button></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                            $queryc3 = "SELECT s.sap_id, s.std_name, course.c_name FROM std_enroll_course s INNER JOIN course where s.crs3 = course.c_id";
                            $datac3 = mysqli_query($conn, $queryc3) or die(mysqli_error($conn));
                            while ($row = mysqli_fetch_array($datac3)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['sap_id']; ?></th>
                                        <td><?php echo $row['std_name'] ?></td>
                                        <td><?php echo $row['c_name']; ?></td>
                                        <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_student.php?sap_id=<?php echo $row['sap_id']; ?>">Edit</a></button></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                            $queryc4 = "SELECT s.sap_id, s.std_name, course.c_name FROM std_enroll_course s INNER JOIN course where s.crs4 = course.c_id";
                            $datac4 = mysqli_query($conn, $queryc4) or die(mysqli_error($conn));
                                                        while ($row = mysqli_fetch_array($datac4)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['sap_id']; ?></th>
                                    <td><?php echo $row['std_name'] ?></td>
                                    <td><?php echo $row['c_name']; ?></td>
                                    <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_student.php?sap_id=<?php echo $row['sap_id']; ?>">Edit</a></button></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            $queryc5 = "SELECT s.sap_id, s.std_name, course.c_name FROM std_enroll_course s INNER JOIN course where s.crs5 = course.c_id";
                            $datac5 = mysqli_query($conn, $queryc5) or die(mysqli_error($conn));
            
                            while ($row = mysqli_fetch_array($datac5)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['sap_id']; ?></th>
                                    <td><?php echo $row['std_name'] ?></td>
                                    <td><?php echo $row['c_name']; ?></td>
                                    <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_student.php?sap_id=<?php echo $row['sap_id']; ?>">Edit</a></button></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            $queryc6 = "SELECT s.sap_id, s.std_name, course.c_name FROM std_enroll_course s INNER JOIN course where s.crs6 = course.c_id";
                            $datac6 = mysqli_query($conn, $queryc6) or die(mysqli_error($conn));




                            while ($row = mysqli_fetch_array($datac6)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['sap_id']; ?></th>
                                    <td><?php echo $row['std_name'] ?></td>
                                    <td><?php echo $row['c_name']; ?></td>
                                    <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_student.php?sap_id=<?php echo $row['sap_id']; ?>">Edit</a></button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>