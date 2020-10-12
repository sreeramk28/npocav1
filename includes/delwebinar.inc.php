<?php
require_once('../classes/dbce.class.php');
require_once('../classes/webinarsmodel.class.php');
require_once('../classes/webinarscontr.class.php');
$shn_id = $_POST['shn_id'];
if(!isset($shn_id) || empty($shn_id)) {
	header("Location: ../administrator.php?message=fail");
	exit();
}
$obj = new WebinarsContr();
$obj->removeWebinar($shn_id);
header("Location: ../administrator.php?message=Session Deleted Successfully!");
exit();