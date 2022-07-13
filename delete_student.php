<?php include 'connection.php';
$id = $_GET['sap_id'];
$delete = "DELETE FROM std WHERE Sap_id=$id";
$data = mysqli_query($conn, $delete);
if ($data) {
?>
    <script>
        alert("Data Deleted");
        window.open("http://localhost/rha-erp/student_list.php", "_self")
    </script>
<?php
} else {
?>
    <script>
        alert("Please Try Again");
        window.open("http://localhost/rha-erp/student_list.php", "_self")
    </script>
<?php
}
