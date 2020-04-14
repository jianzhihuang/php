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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Shopping Cart</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    
</head>
<body>

<div class="container">
                <h2 align= "center">Shopping Cart</h2>
                <?php
                $sql = "SELECT * FROM `Cart` ORDER BY id ASC";
                $result = mysqli_query($link,$sql);
                if(mysqli_num_rows($result))
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        

                ?>  
                <div class="col-md-4" >
                    <form action="index.php?=action=add&id=<?php echo $row["id"];?>">
                    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center" >
                    <img src="/public_html/test1/images/9.jpg" class="img-responsive" /><br />
                    <h4 class="text-info"><?php echo $row["name"];?></h4>
                    <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                    <input type="text">
                    
                    
                    
                    
                    </div>
                    
                    </form> 
                </div>

                <?php      
                    }


                } 

                ?>

</div>
</body>
</html>