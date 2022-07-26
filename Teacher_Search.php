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
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php include ('header.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <form action="Teacher_Search.php" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div style="margin-bottom: 20px;" class="input-group">
                            <input class="form-control" name="search" value="" type="number" placeholder="Enter Teacher ID" />
                            <button class="btn btn-primary" id="std-search" type="submit" style="background-color:#34495e"> <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Teacher ID</th>
                                <th scope="col">Teacher Name</th>
                                <th scope="col">Assigned Course</th>
                                <th scope="col">No. Of Lectures</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- PHP CODE -->
                            <?php
                            if (count($_GET)>0) {
                                $search = $_GET['search'];
                                $query = "SELECT ac.t_id, ac.t_name, c.c_name, ac.c_num FROM  assign_course ac INNER JOIN course c WHERE ac.c_id=c.c_id AND t_id=$search";
                                $data = mysqli_query($conn, $query);
                                if ($data) {
                                    while ($row = mysqli_fetch_array($data)) {
                                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['t_id']; ?></th>
                                        <td><?php echo $row['t_name']; ?></td>
                                        <td><?php echo $row['c_name']; ?></td>
                                        <td><?php echo $row['c_num']; ?></td>
                                        <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="edit_assign.php?t_id=<?php echo $row['t_id']; ?>">Edit</a></button></td>
                                        <td> <button type="button" class="btn btn-danger"> <a style="color: white; text-decoration: none;" onclick="return confirm('Are you sure, you want to delete?')" href="delete_assign.php?t_id=<?php echo $row['t_id']; ?>">Delete</a></td>
                                        <td> <button type="button" class="btn btn-primary"><a style="color: white; text-decoration: none;" href="teacher_timetable.php?t_id=<?php echo $row['t_id']; ?>">Schedule</a></button></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>No Data Found</td>
                                </tr>
                                <?php
                            }
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