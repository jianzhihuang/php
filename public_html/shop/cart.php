<?php
    if (isset($_POST['submit'])){

        foreach($_POST['quantity'] as $key => $value){
            if($value == 0 ){
                
                unset($_SESSION['cart'][$key]);


            }else{

                $_SESSION['cart'][$key]['quantity']=$value;


            }
        



        }


    }


?>



<h1>購物車</h1>
<a href="index.php?"  class="btn btn-danger btn-sm" >返回商品列表</a>

<form class="form-group" method="post" action="index.php?page=cart">

    <table> 
            <tr>
                <th>名子</th>
                <th>數量</th>
                <th>價格</th>   
                <th>單項總價格</th>
            </tr>
<?php
     $sql="SELECT * FROM Cart WHERE id IN(";
            
    foreach($_SESSION['cart'] as $id => $value){
            
                        
    $sql.=$id.",";
            
    }
    $sql = substr($sql,0,-1).") ORDER BY name ASC";
    $query = mysqli_query($link,$sql);
    $totalprice = 0;
    while($row=mysqli_fetch_array($query)){
        $subtotal = $_SESSION['cart'][$row['id']]['quantity'] *$row['price'];
        $totalprice += $subtotal;
    ?>
        <tr>
            <th><?php echo $row['name']?></th>
            <th><input class="form-control form-control-sm" type="text" name="quantity[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity']  ?>"></th>
            <th><?php echo $row['price'] ?></th>
            <th><?php echo $_SESSION['cart'][$row['id']]['quantity'] * $row['price'] ?></th>
            
        </tr>


<?php
    }
?>


<tr>
<th>總金額 : <?php echo $totalprice ?></th>


</tr>



    </table>


<button class="btn btn-outline-primary" type="submit" name="submit">更新購物車</button>
</form>
<br/>
<p class="h6">假如要刪除商品,請把數量設為 0 。</>
