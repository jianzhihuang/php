<?php

    $city = $_GET["city"];

    $city = str_replace(" ","-",$city);
    
    echo  @file_get_contents("https://zh.weather-forecast.com/locations/Uk/forecasts/latest");

    preg_match("/\"phrase\">(.*?)<\/span>/i",$contents, $matches);

    echo $matches[1];




?>