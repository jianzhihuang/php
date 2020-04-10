<?php 
    

    if (isset($_GET['action']) && $_GET['action']=="add") {
        $id=intval($_GET['id']);
        
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity']++;
        } else {
            $sql_s = "SELECT * FROM `Cart` WHERE id={$id}";
        
        
            $query_s=mysqli_query($link, $sql_s);
            // print_r($query_s);
            if (mysqli_num_rows($query_s)!=0) {
                $row_s = mysqli_fetch_array($query_s);
                // echo print_r($row_s);
                $_SESSION['cart'][$row_s['id']]=array(
                "quantity"=>1,
                "price" => $row_s['price']


            );
            } else {
                $message="商品的數量無效";
            }
        }
    } 

?>


<h1>商品列表</h1>

<?php

if(isset($message)){

    echo "<h2>$message</h2>";

    
}

?>
            <table class="table">
                <tr>
                    <th scope="col">名稱</th>
                    <th scope="col">描述</th>
                    <th scope="col">價錢</th>
                    <th scope="col">動作</th>
                </tr>

                <!-- <tr>
                    <td>商品一</td>
                    <td>一些描述</td>
                    <td>NT$999</td>
                    <td><a href="">加入購物車</a></td> 



                </tr> -->
<?php
        $sql = "SELECT * FROM `Cart` ORDER BY name ASC";
        $query = mysqli_query($link,$sql);

        while ($row = mysqli_fetch_array($query)){
?>       
            <tr>
                <th><?php echo $row['name']?></th>
                <th><?php echo $row['description']?></th>
                <th><?php echo $row['price']?></th>
                <th><a href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>">加入購物車</a></th>
                </tr> 
<?php           
            }; 
?>


            </table>