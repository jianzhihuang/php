<?php

    if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];  
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $message = $_POST["message"];
        
    
    
    if(empty($name)||empty($email)||empty($pass1)||empty($pass2)||empty($messagel)){

        echo "<span class='form-error'>請輸入完整信息</span>";


    }

}else{

    echo "<span class='form-error'>網路錯誤,請稍後在試!</span>";



}







?>