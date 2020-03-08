<?php


    $contents = @file_get_contents("https://www.msn.com/zh-tw/weather");

    preg_match("/今天(.*?)天氣/i",$contents, $matches);

    print_r($matches);


?>