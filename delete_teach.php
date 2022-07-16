<?php include 'connection.php';
$id = $_GET['t_id'];
$delete = "DELETE FROM teach WHERE t_id=$id";
$data = mysqli_query($conn, $delete);
if ($data) {
?>
    <script>
        alert("Data Deleted");
        window.open("http://localhost/rha-erp/All_teach_list.php", "_self")
    </script>
<?php
} else {
?>
    <script>
        alert("Please Try Again");
        window.open("http://localhost/rha-erp/All_teach_list.php", "_self")
    </script>
<?php
}
