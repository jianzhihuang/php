<?php


    $connection = mysqli_connect("localhost", "huangzhi_ken", "Qwe22034409", "huangzhi_demo");


    if (mysqli_connect_error()){

        die("無法連結數據庫"."<br/>"); 


    };

    // $query = "INSERT INTO users  (name ,email,password) VALUES('Kelly','kelly@gmail.com','newpass')";


    $query = "SELECT name FROM `users` WHERE name = 'Kel'ly' OR password != ''";

    if ($result = mysqli_query($connection , $query)){



        echo mysqli_num_rows($result);


        // echo "已經找到相關內容";
        while ($row = mysqli_fetch_array($result)){

            print_r($row);

        };


    }else{

        echo "無法找到相關內容";



    }

    // echo "繼續運行代碼";

?>