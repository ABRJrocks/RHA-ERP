<?php

include 'connection.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO register (fname, lname, email, pass) VALUES ('$fname', '$lname', '$email', '$pass')";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        ?>
               <script>
        alert("Account Created Successfully!")
        window.open("http://localhost/rha-erp/login.html","_self")

    </script>
        <?php
        

    }
    else
    {
        echo"Error";
    }
}

?>