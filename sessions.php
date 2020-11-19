<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require_once("includes/bootstrap4.php"); ?>
	<link rel="icon" type="image/jpeg" href="assets/favi.jpeg"/>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
	<link href="style/navbar.css" rel="stylesheet">
	<link href="style/sessions.css" rel="stylesheet">
	<link href="style/footer.css" rel="stylesheet">
	<link href="style/fontstyles.css" rel="stylesheet">
	<script src="js/navbar.js" type="text/javascript"></script>
</head> 
<body>
	<?php require_once("includes/navbar.php"); ?>
	<div class="sessions-page-wrapper" style="min-height: 90vh;">
		<br>
		<div class="chumma">
			<p class="sessions-heading mont-font semibold-emphasis text-center">
				Sessions
			</p>
			<p id="session-desc" class="text-center opensans-font ftsz-14" style="padding:0 14vw">
			Engage with the finest professionals from industry and academia, to get an insiders perspective on career, growth opportunities and its future prospects. Learn, and get inspired.
			</p>
			<br>
			<div id="sessions-boxes-wrap" class="sessions-boxes-wrap">
				
			</div>
		</div>
	</div>
	<br><br>
	<!-- dummy footer -->
	<?php require_once("includes/footersmall.php") ?>
	<!-- footer -->

	<script type="text/javascript" src="js/sessions.js"></script>
</body>
</html>