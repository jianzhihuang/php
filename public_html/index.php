<?php

    setcookie("id","test",time() + 60 * 60);

    echo $_COOKIE["id"];



?>