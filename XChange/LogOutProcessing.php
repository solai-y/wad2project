<?php
require_once("Security.php");
$_SESSION['user'] = Null; // removes session variable to ensure safe logout
header("Location: LogInPage.php");
exit();
?>