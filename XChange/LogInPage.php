<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBOSS</title>
    <link rel="stylesheet" href="stylesheets/defaultStyling.css">
    <!-- the above line of code is for the stylesheet -->
</head>

<body>
    <?php require_once("common.php") ?> 
    <?php
        if (isset($_POST['btnPost'])) {
            $_SESSION['user'] = 'Jacob';
        }
    ?>
    <h1 id="title">XChange</h1>

    <!-- log in form -->
    <div>
        <p>
            <form method="post">
                Username: <input type="text"> <br> <br>
                Password:&nbsp; <input type="password"> <br> <br>
                <button id="buttonLogIn" name='btnPost' value='Post'>Log In</button>
            </form>
        </p>
    </div> 
    <a href="HomePage.php">Home</a>
</body>
</html>