<?php

    if ($_POST['submit']){

        if(!$_POST['email']) $error.="<br />Please enter your email.";
        else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))$error.="<br />Please a valid email address.";


        if(!$_POST['password']) $error.="<br />Please enter your password.";
        else{

            if (strlen($_POST['password'])<8) $error.="<br />Please enter your a password at least 8 characters.";
            if (!preg_match('`[A-Z]`',$_POST['password']))$error.="<br />Please include at least one capital letter in your password";

        }

        if  ($error) echo "There were error(s) in your signup details:".$error;
        else{
            
            $link =
            mysqli_connect("localhost","huangzhi_ken","Qwe22034409","huangzhi_demo");
            $query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";

            $result = mysqli_query($link,$query);
            
            echo $results = mysqli_num_rows($result);

            if ($results) echo "That email address is already registered,Do you want log in?";

            else{


                $query = "INSERT INTO users (email,password ) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";

                
            }


        }
    }

?>


<form method="post" action="">

    <input type="email" name="email" id="email" />
    <input type="password" name="password" id="password" />
    <input type="submit" name="submit" value="Sign Up"/>



</form>