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
	<title>Remove Session Page</title>
	<style type="text/css">
		#npoca-sessions {
			border-collapse: collapse;
		}
		#npoca-sessions tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		#npoca-sessions td, #npoca-sessions th {
  			border: 1px solid #ddd;
  			padding: 8px;
		}
		#npoca-sessions th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #ffc31b;
		  color: black;
		}
	</style>
</head>
<body>
	<p class="display-4 text-center">DELETE SESSION CONTROL</p>
	<br><br>
	<p class="display-6 text-center">Sessions in the database:</p><br>
	<div style="margin-left: 20%; margin-right: 20%;">
		
		<?php
			require_once("classes/dbce.class.php");
			require_once("classes/webinarsmodel.class.php");
			require_once("classes/webinarscontr.class.php");
			require_once("classes/webinarsbetterview.class.php");
			$obj = new WebinarsBetterView();
			$obj->showWebinarsSignature();
		?>
		<br><br>
		<p class="display-6">Specify ID to be deleted</p>
		<form id="admin_form" method="POST" action="includes/delwebinar.inc.php">
			<div class="form-group">
				<label for="shn_id">Session ID:</label>
				<input type="number" id="shn_id" name="shn_id" min="1" max="999999" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit" required>
			</div>
		</form>
	</div>
</body>
</html>