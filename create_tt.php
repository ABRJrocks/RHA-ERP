<?php

require ('connection.php');
$day = $_POST['day'];
$c_id = $_POST['c_id'];
$timeslot = $_POST['timeslot'];
$room = $_POST['room'];
$teacher = $_POST['teacher'];

$sql = "INSERT INTO timetable (day,Timeslot,room, c_id,t_id) VALUES ('$day', '$timeslot','$room', '$c_id',$teacher)";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        ?>   
        <script>
        alert("Slot Assigned!")
        window.open("http://localhost/rha-erp/Create_timetable.php","_self")
    </script>
        <?php
    }
    else
    {
        ?>   
        <script>
        alert("Please Try Again!")
        window.open("http://localhost/rha-erp/Create_timetable.php","_self")
    </script>
        <?php
    }
}

?>