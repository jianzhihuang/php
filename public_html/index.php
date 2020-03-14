<?php include("login.php");?>
<form method="post" action="">

    <input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']);?>"/>
    <input type="password" name="password" id="password" value="<?php echo addslashes($_POST['password']);?>"/>
    <input type="submit" name="submit" value="Sign Up"/>



</form>

<form method="post" action="">

    <input type="email" name="loginemail" id="email" value="<?php echo addslashes($_POST['email']);?>"/>
    <input type="password" name="loginpassword" id="loginpassword" value="<?php echo addslashes($_POST['password']);?>"/>
    <input type="submit" name="submit" value="Log In"/>



</form>