<?php
    session_start();
    include("connection.php");


?>


<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Shopping Cart</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>My Shop Cart</title>
</head>
<body>

<div class="container">
                <h2 align= "center">Shopping Cart</h2>
                <?php
                $sql = "SELECT * FROM articles";
                $result = mysqli_query($link,$sql);
                
                if (mysqli_num_rows($result)){
                    while($row = mysqli_fetch_row($result)){


                ?>  
                    <div class="col-md-4" >
                    <form action="index.php?=action=add&id="<?php  ?>></form>
                    
                    
                    </div>

                <?php      
                    }

                }

                ?>

                <div class="col" style="width: 18rem;">

        
    </div>
</div>
</body>
</html>