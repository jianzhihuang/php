<?php


    echo @file_get_contents("https://www.weather-forecast.com/locations/London/forecasts/latest");

    preg_match("/Light rain/i",$contents, $matches);

    print_r($matches);


?>