<?php
require_once('DBconnect.php');
session_start();

$name = $_POST['name'];
$phn = $_POST['contact'];
$email = $_POST['email'];
$plan1 = $_POST['plan1'];
$p1 =$_POST['p1'];
$p2 =$_POST['p2'];
$p3 =$_POST['p3'];
$p4 =$_POST['p4'];
$pass = $_POST['password'];
// Check if phone number already exists
$checkQuery = "SELECT * FROM users WHERE `phone` = '$phn'";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // Phone number already exists
	$_SESSION['error1']=true;
	header("Location: registration.php");
} else {
    // Phone number doesn't exist, so insert the new user
    $sql = "INSERT INTO users VALUES('$name', '$phn', '$email', '$pass','$plan1')";
    $result = mysqli_query($conn, $sql);
	$sql1 = "CREATE TABLE `$plan1` (
		`$p1` VARCHAR(255),
		`$p2` VARCHAR(255),
		`$p3` VARCHAR(255),
		`$p4` VARCHAR(255)
	)";
	$result1 = mysqli_query($conn, $sql1);
	$sql2 = "CREATE TABLE `$plan1-names` (
		`$p1` VARCHAR(255),
		`$p2` VARCHAR(255),
		`$p3` VARCHAR(255),
		`$p4` VARCHAR(255)
	)";
	$result2 = mysqli_query($conn, $sql2);
	$sql3 = "CREATE TABLE `$plan1-transactions` (
		`name` VARCHAR(255),
		`item` VARCHAR(255),
		`amount` VARCHAR(255),
		`timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";
	$result3 = mysqli_query($conn, $sql3);
	 header("Location: login.php");

	}
?>