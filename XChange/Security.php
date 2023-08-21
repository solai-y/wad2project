<?php
    require_once("common.php");
    if ( !isset($_SESSION["user"]) ) {
        header("Location: LogInPage.php"); 
        exit;
    }
?>
