<?php include 'connection.php';
session_start();
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
    <title>Enrolled Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php include ('header.php'); ?>
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
                            $query = "SELECT * FROM  std_enroll_course";
                            $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                            if ($data) {
                                $i = 1;
                                while ($row = mysqli_fetch_array($data)) {
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['sap_id']; ?></th>
                                        <td><?php echo $row['std_name'] ?></td>
                                        <td><?php
                                            $crs1Q = "SELECT course.c_name FROM std_enroll_course s INNER JOIN course where s.crs1 = course.c_id AND $i = s.sr";
                                            $datacrs1 = mysqli_query($conn, $crs1Q);
                                            $rescrs1 = mysqli_fetch_array($datacrs1);
                                            echo $rescrs1['c_name'];
                                            
                                            ?></td>

                                        <td><?php $crs2Q = "SELECT course.c_name FROM std_enroll_course s INNER JOIN course where s.crs2 = course.c_id AND $i = s.sr";
                                            $datacrs2 = mysqli_query($conn, $crs2Q);
                                            $rescrs2 = mysqli_fetch_array($datacrs2);
                                            echo $rescrs2['c_name']; ?></td>

                                        <td><?php $crs3Q = "SELECT course.c_name FROM std_enroll_course s INNER JOIN course where s.crs3 = course.c_id AND $i = s.sr";
                                            $datacrs3 = mysqli_query($conn, $crs3Q);
                                            $rescrs3 = mysqli_fetch_array($datacrs3);
                                            echo $rescrs3['c_name']; ?></td>

                                        <td><?php $crs4Q = "SELECT course.c_name FROM std_enroll_course s INNER JOIN course where s.crs4 = course.c_id AND $i = s.sr";
                                            $datacrs4 = mysqli_query($conn, $crs4Q);
                                            $rescrs4 = mysqli_fetch_array($datacrs4);
                                            echo $rescrs4['c_name']; ?></td>

                                        <td><?php $crs5Q = "SELECT course.c_name FROM std_enroll_course s INNER JOIN course where s.crs5 = course.c_id AND $i = s.sr";
                                            $datacrs5 = mysqli_query($conn, $crs5Q);
                                            $rescrs5 = mysqli_fetch_array($datacrs5);
                                            echo $rescrs5['c_name']; ?></td>

                                        <td><?php $crs6Q = "SELECT course.c_name FROM std_enroll_course s INNER JOIN course where s.crs6 = course.c_id AND $i = s.sr";
                                            $datacrs6 = mysqli_query($conn, $crs6Q);
                                            $rescrs6 = mysqli_fetch_array($datacrs6);
                                            echo $rescrs6['c_name']; ?></td>

                                        <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_student.php?sap_id=<?php echo $row['sap_id']; ?>">Edit</a></button></td>

                                    </tr>
                                <?php
                                $i++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>No Data Found</td>
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