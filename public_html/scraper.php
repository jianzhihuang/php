<?php

    // $city = $_GET["city"] ;
    
    // $city = str_replace(" ", "-", $city);
    
    $city = "london";

    $apiKey = "4ee0a10db5a661f60c3282090670017e";

    $contents =  file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=".$city."&appid=".$apiKey."&lang=zh_tw");

    $contents = json_decode($contents,true);

    echo $contents;
    

    
?>