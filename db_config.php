<?php
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server,$username,$password);
//secure connection with the database.
if(!$con){
    die("Connection to DB failed as".mysqli_connect_error());
}
?>
