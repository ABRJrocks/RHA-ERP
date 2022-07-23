<?php

require ('connection.php');
$c_id = $_POST['c_id'];
$c_num = $_POST['c_num'];
$t_id = $_POST['t_id'];

$sql = "INSERT INTO assign_course (t_id, c_id,  c_num) VALUES ('$t_id', '$c_id', '$c_num')";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        ?>   
        <script>
        alert("Teacher Assigned!")
        window.open("http://localhost/rha-erp/assign_course.php","_self")
    </script>
        <?php
    }
    else
    {
        ?>   
        <script>
        alert("Please Try Again!")
        window.open("http://localhost/rha-erp/assign_course.php","_self")
    </script>
        <?php
    }
}

?>