<?php
session_abort();
// need to check if the above code is correct
session_start();

spl_autoload_register(
    function ($class){
        require_once  "classes/$class.php";
    }
);

?>