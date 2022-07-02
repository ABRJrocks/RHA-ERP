<?php

require ('connection.php');
$name = $_POST['name'];
$c_id = $_POST['c_id'];
$c_num = $_POST['c_num'];

$sql = "INSERT INTO teacher (t_name, c_id,  c_num) VALUES ('$name', '$c_id', '$c_num')";

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