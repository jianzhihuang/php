<?php

    if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];  
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $message = $_POST["message"];

    echo $name."<br/>";
    echo $email."<br/>";
    echo $pass1."<br/>";
    echo $pass2."<br/>";
    echo $message."<br/>";


}







?>