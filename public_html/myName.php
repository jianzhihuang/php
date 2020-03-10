<?php

    session_start();

    print_r($_SESSION["name"]);

    
    $_SESSION["name"] = "John";

    session_unset();




?>