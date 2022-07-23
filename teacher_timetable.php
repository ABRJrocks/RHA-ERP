<?php
include 'connection.php';
session_start();
$id = $_GET['t_id'];
if($_SESSION["fname"]) {
    $select = "SELECT ac.t_name,t.day,t.timeslot,t.room,c.c_name
    FROM(timetable t
INNER JOIN assign_course ac ON t.t_id = ac.t_id
INNER JOIN course c ON t.c_id = c.c_id )";
    $data = mysqli_query($conn, $select) or die( mysqli_error($conn));
    $row1 = mysqli_fetch_array($data);

function timeslot($slot)
{
    if ($slot == 1) {
        return "8:00 - 9:30";
    }
    elseif ($slot == 2) {
        return "9:30 - 11:00";
    }
    elseif ($slot == 3) {
        return "11:00 - 12:30";
    }
    elseif ($slot == 4) {
        return "1:00 - 2:30";
    }
    elseif ($slot == 5) {
        return "2:30 - 4:00";
    }
    elseif ($slot == 6) {
        return "4:00 - 5:30";
    }
    else{
        echo "invalid slot";
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
    <title>Time Table</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php include ('header.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Time Table of <?php echo $row1['t_name'] ?></h1>
                    <!-- / College Timetable -->
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Day<th>
                            <th scope="col">Timeslot<th>
                            <th scope="col">Room no.<th>
                            <th scope="col">Course Name<th>
                        </tr>
                    </thead>  
                    <tbody>  
                    <?php
                        while ($row = mysqli_fetch_array($data)) {
                            ?>
                        <tr>
                        <td><?php echo $row['day'];?></td>
                        <td><?php echo timeslot($row['timeslot']);?></td>
                        <td><?php echo $row['room'];?></td>
                        <td><?php echo $row['c_name'];?></td>
                        <tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>

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