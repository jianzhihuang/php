<?php


    echo  @file_get_contents("https://tenki.jp/");

    preg_match("/今明(.*?)天氣穩定/i",$contents, $matches);

    print_r($matches);


?>