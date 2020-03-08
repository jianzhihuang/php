<?php

    $city = $_GET["city"];

    $city = str_replace(" ","-",$city);
    
    $contents = @file_get_contents("https://tenki.jp/forecast/".$city."/");



    preg_match("/\"forecast-comment\">(.*?) <\/div>/i",$contents, $matches);

    print_r($matches);
    echo $matches[1];
?>