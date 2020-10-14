<?php
require_once("../classes/dbce.class.php");
require_once("../classes/mailsubsmodel.class.php");
require_once("../classes/mailsubscontr.class.php");
$sub_name = $_POST["pname"];
$sub_email = $_POST["pemail"];
$sub_designation = $_POST["pwho"];
if(isset($sub_name) && isset($sub_email) && isset($sub_designation)) {
	$obj = new MailSubsContr();
	$obj->addSubscriber($sub_name, $sub_email, $sub_designation);
	echo "Thank you for subscribing! You'll hear from us soon";
}
else {
	echo "Some error!";
}
