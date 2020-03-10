<?php

    session_start();

    print_r($_SESSION["name"]);

    echo "<br>";
    $_SESSION["name"] = "John";

    print_r($_SESSION["name"]);





?>