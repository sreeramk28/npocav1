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
	<title>Add Session Page</title>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#speaker_count').change(function() {

				var cnt = parseInt($(this).val(), 10);
				$('.hider').remove();
				//alert(cnt);
				
				$('#speakers_control').append('<div class="hider form-group"></div>');
				for(var i = 0; i < cnt; i++) {

					$('.hider').append('<input type="text" class="form-control" name="speaker_name[]" placeholder="Name ' + (i+1) + '" maxlength="25" required>');
					$('.hider').append('<p></p><input type="text" class="form-control" name="speaker_profile[]" placeholder="Profile ' + (i+1) + '" maxlength="25" required><br>');
				}
			}); 
		});
	</script>
</head>
<body>
	<p class="display-4 text-center">ADD NEW SESSION CONTROL</p>

	<div style="margin-left: 20%; margin-right: 20%;">
		
		
		<br><br>
		<form id="admin_form" method="POST" action="includes/addwebinar.inc.php">
			<div class="form-group">
				<label for="shn_title">Title:</label>
			<input class="form-control" type="text" name="shn_title" id="shn_title" maxlength="35" required>
			</div>
			<div class="form-group">
				<label for="speaker_count">Number of speakers:</label>
				<select class="form-control" id="speaker_count" name="speaker_count" required>
					<option value="">Select number</option> 
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
			</div>
			<div id="speakers_control"></div>
			<div class="form-group">
				<label for="shn_description">Session Description:</label>
				<textarea id="shn_description" class="form-control" name="shn_description" maxlength="200" required></textarea>
			</div>
			<div class="form-group">
				<label for="shn_date">Session Date:</label>
				<input id="shn_date" class="form-control" type="date" name="shn_date" required>
			</div>
			<div class="form-group">
				<label for="shn_time">Session Time:</label>
				<input id="shn_time" class="form-control" type="time" name="shn_time" required>
			</div>
			<div class="form-group">
				<label for="shn_type">Session Type:</label>
				<select class="form-control" id="shn_type" name="shn_type" required>
					<option value="">Select session type</option>
					<option value="Master Class">Master Class</option>
					<option value="Individual">Individual</option>
					<option value="Panel">Panel</option>
				</select>
			</div>
			<div class="form-group">
				<label for="shn_link">Session Link:</label>
				<input type="text" name="shn_link" id="shn_link" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit" required>
			</div>
			
		</form>
	</div>
</body>
</html>