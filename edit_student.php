<?php include 'connection.php';
session_start();
$id = $_GET['sap_id'];
$select = "SELECT * FROM std WHERE sap_id=$id";
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
                                <h2 style="color:#34495e">Edit Student Data</h2>
                            </div>
                            <form action="" method="post">
                                <div class="form-floating my-5">
                                    <input name="name" type="name" id="name" placeholder="e.g. Muhammad" class="form-control" value="<?php echo $row['fname'] ?>" />
                                    <label for="name" class="form-label">First Name:</label>
                                </div>

                                <div class="form-floating my-5">
                                    <input name="St_lname" type="name" class="form-control" id="St_lname" placeholder="e.g Ahmad" value="<?php echo $row['lname'] ?>" />
                                    <label for="St_lname" class="form-label">Last Name:</label>
                                </div>
                                <div class="form-floating my-5">
                                    <input name="email" type="text" class="form-control" id="email-std" placeholder="Example@rhaerp.com" value="<?php echo $row['email'] ?>" />
                                    <label name="email" class="form-label">Email</label>
                                </div>

                                <label name="Semester" for="Semester" class="form=label">Semester</label >
                                <select name="Semester" id="Semester" class="form-select" value="<?php echo $row['semester'] ?>" >
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
                                <button value="Update" name="update-btn" class="btn btn-primary" style="background-color:#34495e">Update</button>
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
    $fname = $_POST['name'];
    $lname = $_POST['St_lname'];
    $Semester = $_POST['Semester'];
    $email = $_POST['email'];
    $update = "UPDATE std SET fname='$fname', lname='$lname', semester='$Semester', email='$email' WHERE sap_id=$id";
    $data = mysqli_query($conn, $update);
    if ($data) {
?>
        <script>
            alert("Data Updated")
            window.open("http://localhost/rha-erp/student_list.php", "_self")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Please Try Again")
            window.open("http://localhost/rha-erp/student_list.php", "_self")
        </script>
<?php
    }
}
?>