<?php

    $city = $_GET["city"];

    $city = str_replace(" ","-",$city);
    
    $contents = @file_get_contents("https://tenki.jp/forecast/4/");



    preg_match("/\"forecast-comment\">(.*?)<\/div>/i",$contents, $matches);

    
    echo $matches[1];
?>