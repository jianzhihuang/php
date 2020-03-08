<?php


    $contents = @file_get_contents("https://tenki.jp/");

    preg_match("/\"forecast-comment\">(.*?)<\/div>/i",$contents, $matches);

    echo $matches[1];




?>