<?php
$servername='localhost';
$username='root';
$password='';
$db='st_demo';

$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    echo"Error";
}
else
{
    echo"Connection Built Successfuly!";
}
?>