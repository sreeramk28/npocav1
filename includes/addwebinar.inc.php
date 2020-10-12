<?php
require_once('../classes/dbce.class.php');
require_once('../classes/webinarsmodel.class.php');
require_once('../classes/webinarscontr.class.php');
$shn_title = $_POST['shn_title'];
if(!isset($shn_title) || empty($shn_title)) {
	header("Location: ../administrator.php?message=fail");
	exit();
}
$speaker_name = $_POST['speaker_name'];
$speaker_profile = $_POST['speaker_profile'];
$shn_description = $_POST['shn_description'];
$shn_date = $_POST['shn_date'];
$shn_time = $_POST['shn_time'];
$shn_type = $_POST['shn_type'];
$shn_link = $_POST['shn_link'];
$curn = "::Name::";
$curp = "::Profile::";
$N = count($speaker_name);
$shn_speakers = "";
for($i = 0; $i < $N; $i++) {
	$shn_speakers .= ($curn . $speaker_name[$i] . $curp . $speaker_profile[$i]);
}
$obj = new WebinarsContr();
$obj->addWebinar($shn_title, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link);
header("Location: ../administrator.php?message=Session Added Successfully!");
exit();