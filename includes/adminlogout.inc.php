<?php
session_start();
session_unset($_SESSION['loggedIn']);
session_destroy();
header("Location: ../adminlogin.php");
exit();