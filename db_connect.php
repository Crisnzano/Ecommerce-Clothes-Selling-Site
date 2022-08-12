<?php
function connect(){
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
}
 
function getData($sql){
    $conn = connect();
    $multiple_rows = [null];
    if($conn!=false){
        $result = mysqli_query($conn,$sql);
    }
    return $result;
 
}
function getUserById($id)
    {
        $conn = connect();
        $sql = "SELECT * FROM users INNER JOIN roles ON users.role_id = roles.role_id WHERE user_id = '$id' LIMIT 1";
 
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        
        return $user; 
    }
 
 
?>
