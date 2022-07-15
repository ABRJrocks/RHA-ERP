<?php include 'connection.php';
$id = $_GET['c_id'];
$delete = "DELETE FROM course WHERE c_id=$id";
$data = mysqli_query($conn, $delete);
if ($data) {
?>
    <script>
        alert("Data Deleted");
        window.open("http://localhost/rha-erp/display_course.php", "_self")
    </script>
<?php
} else {
?>
    <script>
        alert("Please Try Again");
        window.open("http://localhost/rha-erp/display_course.php", "_self")
    </script>
<?php
}
