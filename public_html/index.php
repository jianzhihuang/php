<?php


    $connection = mysqli_connect("localhost", "huangzhi_ken", "Qwe2204409", "huangzhi_demo");


    if (mysqli_connect_error()){

        echo ("無法連結數據庫"."<br/>"); 


    };

    $query = "SELECT * FROM `users` ";

    if ($result = mysqli_query($connection , $query)){

        echo "已經找到相關內容";
        

    }else{

        echo "無法找到相關內容";



    }

    // echo "繼續運行代碼";

?>