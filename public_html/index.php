<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Form</title>




</head>
<body>

        <?php
        
          if ($_GET["name"]){



            echo "你的姓名是 ".$_GET["name"];

          }else{


              echo "請輸入你的姓名";

          }
        
        ?>
        <form>
        
          <label for = "name">姓名</label>
          <input type="text" name="name">

          <input type="submit" name="submit"/>
        
        </form>
  
</body>
</html>