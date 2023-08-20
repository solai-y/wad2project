<?php
require_once("Security.php");
require_once("common.php");
$_SESSION['user'] = Null;
header("Location: LogInPage.php");
exit();
?>