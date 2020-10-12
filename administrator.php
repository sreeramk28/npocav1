<?php
	session_start();
	if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
		header("Location: adminlogin.php");
		exit();
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>Admin Page</title>
</head>
<body>
	<p class="display-4 text-center">ADMIN CONTROL</p>

	<div style="margin-left: 20%; margin-right: 20%;">
		
		<?php
			if(isset($_GET['message'])) {
				echo '<p class="display-6" style="padding: 20px; color: green;">' . $_GET['message'] . '</p>';
			}  
		?>
		<a href="includes/adminlogout.inc.php" class="btn btn-lg btn-primary">Logout</a><br><br>
		<a href="adminaddsession.php" class="btn btn-lg btn-primary">Add a Session</a><br><br>
		<a href="adminremovesession.php" class="btn btn-lg btn-primary">Delete a Session</a><br><br>
	</div>
</body>
</html>