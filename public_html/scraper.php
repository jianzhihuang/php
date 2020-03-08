<?php


    $contents = @file_get_contents("https://www.cwb.gov.tw/V8/C/W/W50_index.html");

    preg_match("/Light rain/i",$contents, $matches);

    print_r($matches);


?>