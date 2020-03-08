<?php

    $city = $_GET["city"];

    $city = str_replace(" ","-",$city);
    
    $contents =  @file_get_contents("https://tenki.jp/forecast/4/");



    preg_match("/\"forecast-comment\">(.*?)<br>/i",$contents,$matches);

    print_r($matches);
    // echo $matches[0];
?>