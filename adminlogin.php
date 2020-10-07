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
	<title>Admin Login Page</title>
	
</head>
<body>
	<p class="display-4 text-center">ADMINS LOGIN</p>
	<div style="margin-left: 20%; margin-right: 20%;">
		<form id="admin_login" method="POST" action="includes/adminlogincheck.inc.php">
			<div class="form-group">
				<label for="admin_username">Username:</label>
				<input class="form-control" type="text" name="admin_username" id="admin_username" maxlength="50" required>
			</div>
			<div class="form-group">
				<label for="admin_password">Password:</label>
				<input class="form-control" type="password" name="admin_password" id="admin_password" maxlength="50" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Enter">
			</div>
		</form>
	</div>
</body>
</html>