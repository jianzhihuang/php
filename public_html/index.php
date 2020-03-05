<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Form</title>




</head>
<body>

        <?php
        
          if ($_POST["name"]){



            echo "你的姓名是 ".$_POST["name"];

          }else{


              echo "請輸入你的姓名";

          }
        
        ?>
        <form method="POST">
        
          <label for = "name">姓名</label>
          <input type="text" name="name">

          <input type="submit" name="submit"/>
        
        </form>
  
</body>
</html>