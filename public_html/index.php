<?php

    setcookie("id","test",time() + 60 * 60);

    // echo $_COOKIE["id"];

    if (count($_COOKIE) > 0){

        echo "Cookies已經設置";


    }else{

        echo "Cookies沒有被設置";


    };


?>