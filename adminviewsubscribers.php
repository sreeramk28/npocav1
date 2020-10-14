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
	<title>View Mail Subs</title>
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
	<p class="display-4 text-center">VIEW MAIL SUBSCRIBER DETAILS</p>
	<br><br>
	<p class="display-6 text-center">Subscribers in the database:</p><br>
	<div style="margin-left: 20%; margin-right: 20%;">
		
		<?php
			require_once("classes/dbce.class.php");
			require_once("classes/mailsubsmodel.class.php");
			require_once("classes/mailsubsview.class.php");
			$obj = new MailSubsView();
			$obj->showAllSubscribers();
		?>
		
	</div>
</body>
</html>