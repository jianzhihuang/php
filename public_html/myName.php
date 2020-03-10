<?php

    session_start();

    print_r($_SESSION["name"]."<br>".);

    $_SESSION["name"] = "John";

    print_r($_SESSION["name"]);





?>