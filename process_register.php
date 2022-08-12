<?php
require_once("db_connect2.php");
 
 
$firstname = $_POST["firstname"];
$secondname = $_POST["secondname"];
$othername =$_POST["othername"];
$email = $_POST["email"];
$profile_pic = $_POST["profile_pic"];
$password =$_POST["password"];
$salt = "#_?!_";
$password = $salt.$password.$salt;
 
 
$encpassword = md5($password);
 
$sql = "INSERT INTO users(firstname,secondname,othername,profile_pic,email,password) VALUES ('$firstname','$secondname','$othername','$profile_pic','$email','$encpassword')";
 
//Insert the data
if(mysqli_query($conn,$sql)){
echo"<br>";
echo "New record Inserted";
header("location:login1.php");
}else{
die("Error Inserting Data");
}
 
?>
