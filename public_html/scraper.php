<?php

    $city = $_GET["city"];

    $city = str_replace(" ","-",$city);
    
    echo @file_get_contents("https://www.accuweather.com/en/gb/london/ec4a%202/weather-forecast/328328");



    preg_match("/<strong>(.*?) <\strong>/i",$contents, $matches);

    // print_r($matches);
    echo $matches[0];




?>