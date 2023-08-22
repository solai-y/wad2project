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
    $UniversityDAO = new UniversityDAO();
    $Universities = $UniversityDAO->get();  
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

    <div class="profile" id="homeProfile">
        Name:
    </div>

    <table border="1" class='list' id='universityList'>
        <th>University</th>
        <th>Exchange slots</th>
        <th>Country</th>
        <th>City</th>
        <th>Image</th>
        <?php
            foreach($Universities as $University) {
                echo "<tr>
                <td>{$University->getName()}</td>
                <td>{$University->getExchangeSlots()}</td>
                <td>{$University->getCountry()}</td>
                <td>{$University->getCity()}</td>
                <td>{$University->getImage()}</td>
                </tr>";
            }
        ?>
    </table>
    <?php
        var_dump($_SESSION["user"]);
    ?>
</body>
</html>