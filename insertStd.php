<?php

require ('connection.php');
$fname = $_POST['name'];
$St_lname = $_POST['St_lname'];
$Semester = $_POST['Semester'];
$email = $_POST['email'];

$sql = "INSERT INTO std (fname, lname, semester, email) VALUES ('$fname', '$St_lname', '$Semester', '$email')";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        ?>   
        <script>
        alert("Data Inserted!")
        window.open("http://localhost/rha-erp/st_register.html","_self")

    </script>
        <?php
    }
    else
    {
        ?>   
        <script>
        alert("Data Inserted!")
        window.open("http://localhost/rha-erp/st_register.html","_self")

    </script>
        <?php
    }
}

?>