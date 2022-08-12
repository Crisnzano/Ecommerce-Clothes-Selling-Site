<?php
 
$servername="localhost";
$username="root";
$password="";
$database="clothes";
 
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
        return false;
    }else{
        return $conn;
 
    }
?>
