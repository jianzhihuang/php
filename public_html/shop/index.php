<?php
    // session_unset();
    session_start();
    require ("includes/connection.php");
    if(isset($_GET['page'])){

        $pages=array("products","cart");
        
        if(in_array($_GET['page'],$pages)){
            
            $_page=$_GET['page'];


        }else{

            $_page="products";
        }

    }else{

        $_page="products";


    }

?>


<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Shopping Cart</title>
    <style>
    body {  
    font-size: 12px; 
    color: gray; 
    } 
  
    a {color:yellowgreen; text-decoration: none;} 
  
    a:hover {text-decoration: underline;} 
  
    h1, h2 {margin-bottom: 15px} 
  
    h1 {font-size: 18px;} 
    h2 {font-size: 16px} 
  
    #container { 
    width: 700px; 
    margin: 150px auto; 
    background-color: #eee; 
    padding:15px; 
    overflow: hidden; 
    } 
  
    #main { 
        width: 490px; 
        float: left; 
    } 
      
        #main table { 
            width: 480px; 
        } 
          
            #main table th { 
                padding: 10px; 
                background-color:#eee;
                color: black; 
                text-align: left; 
            } 
              
            #main table td { 
                padding: 7px; 
            } 
              
            #main table tr { 
                background-color: #d3dcf2; 
            } 
      
    #sidebar { 
        width: 150px; 
        float: left; 
    }
    </style>


</head>


<body>

        <div id="container">
        <div id="main" >
        <?php require($_page.".php");?>



        </div>
        <div id="sidebar">
            <h1>Cart</h1>
<?php

        if(isset($_SESSION['cart'])){
            $sql="SELECT * FROM Cart WHERE id IN(";
            foreach($_SESSION['cart'] as $id => $value){
            $sql.=$id.",";
                
            }
            $sql = substr($sql,0,-1).") ORDER BY name ASC";
            
            $query = mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($query)) {
            
            ?>
            <P><?php echo $row['name']?> X <?php echo $_SESSION['cart'][$row['id']]['quantity']?></P>

            <?php

            }
            ?>
            <hr/>
            <a href="index.php?page=cart" class="btn btn-warning">前往購物車</a>

            <?php

            

        }else{

            echo "<p>你的購物車是空,請選取你的商品。</p>";


        }
?>
        </div>

    </div>
</body>

</html>