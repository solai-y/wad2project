<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XChange</title>
    <link rel="stylesheet" href="stylesheets/defaultStyling.css">
    <!-- the above line of code is for the stylesheet -->
</head>

<body>
    <?php require_once("common.php") ?> 
    <?php
        //form validation
        $listOfErrors = array();
        if (isset($_POST['btnPost'])) {
            if ($_POST['username']=="") {
                $listOfErrors[] = "Username is blank";
            } if ($_POST['password']=="") {
                $listOfErrors[] = "Password is blank";
            } 
        }
        // if no errors it gives the correct $_SESSION value
        if (empty($listOfErrors)) {
            $_SESSION['user'] = 'Jacob';
        }
    ?>
    <h1 id="title">XChange</h1>

    <!-- log in form -->
    <div>
        <p>
            <form method="post">
                Username: <input type="text" name="username"> <br> <br>
                Password:&nbsp; <input type="password" name="password"> <br> <br>
                <?php
                    if (!empty($listOfErrors)) {
                        echo "<div class='errorContainer'>";
                        echo "<ul class='errors'>";
                        foreach($listOfErrors as $error) {
                            echo "<li>$error</li>";
                        }
                        echo "</ul>";
                        echo "</div>";
                    }
                ?>
                <button id="buttonLogIn" name='btnPost' value='Post'>Log In</button>
            </form>
        </p>
    </div> 
    <a href="HomePage.php">Home</a>
</body>
</html>