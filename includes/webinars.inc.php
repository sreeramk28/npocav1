<?php

require_once('../classes/dbce.class.php');
require_once('../classes/webinarsmodel.class.php');
require_once('../classes/webinarscontr.class.php');
require_once('../classes/webinarsview.class.php');

$viewobj = new WebinarsView();
$viewobj->showWebinars();