<?php
session_start();
//Development
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "npocadb";

//Production
// $servername = "sql12.freemysqlhosting.net";
// $dbusername = "sql12353920";
// $dbpassword = "1UmkdelB5l";
// $dbname = "sql12353920";

$dsn = 'mysql:host='. $servername . ';dbname=' . $dbname;

$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

if(!isset($username) || !isset($password) || empty($username) || empty($password)) {
	
	header("Location: ../adminlogin.php");
	exit();
}
try {
	$conn = new PDO($dsn, $dbusername, $dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "select * from npocaadmins where username = ? and password = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$username, $password]);
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$n = count($res);

	if($n == 1) {
		if(!isset($_SESSION['loggedIn'])) {
			
			$_SESSION['loggedIn'] = true;
			header("Location: ../administrator.php");
			exit();
		}
		header("Location: ../administrator.php");
		exit();
	} 
	header("Location: ../adminlogin.php");
	exit();
}
catch(PDOException $e) {
  	echo "Connection failed: " . $e->getMessage();
}