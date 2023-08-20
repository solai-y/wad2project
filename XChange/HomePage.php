<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/defaultStyling.css">
    <!-- the above line of code is for the stylesheet -->
    <title>XChange</title>  
</head>
<body>
    <?php 
    require_once("Security.php");
    require_once("common.php") 
    ?>
    <!-- navigation bar -->
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="LogOutProcessing.php">Log Out</a></li>
        </ul>
    </nav>
    <?php
        var_dump($_SESSION["user"])
    ?>
</body>
</html>