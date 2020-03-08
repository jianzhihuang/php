<?php

    $city = $_GET["city"];

    $city = str_replace(" ", "-", $city);
    
    $contents =  @file_get_contents("https://tenki.jp/forecast/".$city."");



    preg_match("/\"forecast-comment\">(.*?)<br>/i",$contents,$matches);

    
    echo $matches[1];
?>