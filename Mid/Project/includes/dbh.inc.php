<?php 

$dbServername="localhost:3307";
$dbUsername="root";
$dbpassword="";
$dbName="loginphotosystem";

$conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$dbName);

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}

?>
