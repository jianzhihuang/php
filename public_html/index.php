<?php


    $connection = mysqli_connect("localhost", "huangzhi_ken", "Qwe22034409", "huangzhi_demo");


    if (mysqli_connect_error()){

        die("無法連結數據庫"."<br/>"); 


    };

    $query = "SELECT * FROM `users` ";

    if ($result = mysqli_query($connection , $query)){

        // echo "已經找到相關內容";
        $row = mysqli_fetch_array($result);

        print_r($row);

    }else{

        echo "無法找到相關內容";



    }

    // echo "繼續運行代碼";

?>