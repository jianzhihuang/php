<?php

    $city = $_GET["city"];

    $city = str_replace(" ","-",$city);
    
    echo  @file_get_contents("https://www.myweather2.com/City-Town/United-Kingdom/City-of-Westminster/London/14-Day-Forecast.aspx");

    preg_match("/<br><br><p>(.*?)<\/p>/i",$contents, $matches);

    echo $matches[1];




?>