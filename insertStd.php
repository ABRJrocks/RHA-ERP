<?php

require ('connection.php');
$fname = $_POST['name'];
$St_lname = $_POST['St_lname'];
$sap = $_POST['sap'];
$Semester = $_POST['Semester'];
$email = $_POST['email'];

$sql = "INSERT INTO std (fname, lname, sap_id, semester, email) VALUES ('$fname', '$St_lname', '$sap', '$Semester', '$email')";

if(isset($_POST["register"])){
    if(mysqli_query($conn,$sql))
    {
        echo"Data Insert!";
    }
    else
    {
        echo"Error";
    }
}

?>