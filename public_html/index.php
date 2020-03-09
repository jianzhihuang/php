<?php


    mysqli_connect("localhost", "huangzhi_ken", "Qwe2203409", "huangzhi_demo");


    if (mysqli_connect_error()){

        die("無法連結數據庫"."<br/>"); 


    };


    echo "繼續運行代碼";

?>