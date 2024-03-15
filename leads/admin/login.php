<?php
session_start();
include 'db.php';
$_SESSION['password']=$_POST['password'];
$_SESSION['username']=$_POST['username'];
$password = $_POST['password'];
$username = $_POST['username'];

$sql = "select * from admin_info where username='$username' && password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
//echo"<script> alert('Login Success');
echo "<script>window.location.href = 'home.php';</script>";
}
else
{
echo"<script> alert('Invalid Username or Password');
window.location.href = 'index.php';</script>";
}
 
  
?>

