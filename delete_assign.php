<?php include 'connection.php';
$id = $_GET['t_id'];
$delete = "DELETE FROM assign_course WHERE t_id=$id";
$data = mysqli_query($conn, $delete);
if ($data) {
?>
    <script>
        alert("Data Deleted");
        window.open("http://localhost/rha-erp/Teacher_list.php", "_self")
    </script>
<?php
} else {
?>
    <script>
        alert("Please Try Again");
        window.open("http://localhost/rha-erp/Teacher_list.php", "_self")
    </script>
<?php
}
