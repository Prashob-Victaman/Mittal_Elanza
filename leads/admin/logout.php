<?php
session_start();
include 'db.php';
$id="index";
if (session_destroy()){
unset($id);
}
if($id=="")
{
header("Location:index.php");
exit();
}
?>