<?php

    session_start();

    print_r($_SESSION["name"]);

    
    $_SESSION["name"] = "John";

    session_unset();

    echo "我清除SESSION變量後的值是:".$_SESSION["name"].".";


?>