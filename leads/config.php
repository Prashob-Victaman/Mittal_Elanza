<?php
$servername = "elanza.db.9165737.f6a.hostedresource.net";
$username = "elanza";
$password = "Mittal#123";
$dbname = "elanza";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

