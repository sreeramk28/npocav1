<!DOCTYPE html>
<html>
<head>
	<title>Coming Soon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php require_once("includes/bootstrap4.php"); ?>
	<link rel="icon" type="image/jpeg" href="assets/favi.jpeg"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
	<link href="style/navbar.css" rel="stylesheet">
	<link href="style/footer.css" rel="stylesheet">
	<script src="js/navbar.js" type="text/javascript"></script>
	<style type="text/css">
		.page-wrapper {
			margin: 53px 30px 0 30px;
		}
		.puc-text {
			font-family: 'Montserrat', sans-serif; 
			font-weight: 600; 
			color: #1b2f3f;
			
		}
		.puc-text-sz {
			
			font-size: 33px;
		}
		@media only screen and (min-width: 768px) {
			.page-wrapper {
				margin: 53px 90px 0 90px;
			}
			.puc-text-sz {
				letter-spacing: 2px;
				font-size: 41px;
			}
		}
		@media only screen and (min-width: 1184px) {
			.page-wrapper {
				margin: 53px 190px 0 190px;
			}	
			.puc-text-sz {
				letter-spacing: 2px;
				font-size: 46px;
			}	
		}

	</style>
</head>
<body>
	
	<?php require_once("includes/navbar.php"); ?>
	<div class="page-wrapper">
	<div style="margin-top: 65px; min-height: 80vh; display: flex; align-items: center; justify-content: center;">
		<p class="text-center puc-text puc-text-sz">
			PAGE UNDER C<span style="color: #FFC13B;">O</span>NSTRUCTI<span style="color: #FFC13B;">O</span>N 
		</p>
	</div>
	</div>
	<!-- dummy footer -->
	<?php require_once("includes/footersmall.php") ?>
	<!-- footer -->
</body>
</html>