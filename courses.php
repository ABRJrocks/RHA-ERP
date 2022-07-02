<?php

require ('connection.php');
$c_name = $_POST['course'];
$crh = $_POST['crh'];
$semester = $_POST['Semester'];

$sql = "INSERT INTO course (c_name, crh, semester) VALUES ('$c_name', '$crh', '$semester')";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        ?>   
        <script>
        alert("Course Added!")
        window.open("http://localhost/rha-erp/courses.html","_self")
    </script>
        <?php
    }
    else
    {
        echo"Error";
    }
}

?>