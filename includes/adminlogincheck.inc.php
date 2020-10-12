<?php
session_start();
/* ************ Development ************** */

/*$servername = "localhost";
$portnum = "5432";
$dbusername = "postgres";
$dbpassword = "lqSPg28!";
$dbname = "npocadb";*/

/* ************Production **very crucial** ************** */

$dburl = parse_url(getenv("DATABASE_URL"));
$servername = $dburl["host"];
$portnum = $dburl["port"];
$dbusername = $dburl["user"];
$dbpassword = $dburl["pass"];
$dbname = ltrim($dburl["path"], "/");

$dsn = 'pgsql:' . sprintf(
	"host=%s;port=%s;user=%s;password=%s;dbname=%s",
	$servername,
	$portnum,
	$dbusername,
	$dbpassword,
	$dbname
);

$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

if(!isset($username) || !isset($password) || empty($username) || empty($password)) {
	
	header("Location: ../adminlogin.php");
	exit();
}
try {
	$conn = new PDO($dsn);
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
  	exit();
}