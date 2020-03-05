<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Form</title>




</head>
<body>

        <?php


          $name = array("Ken","Josh","Tom");
          $knowYou = 0 ;
        
          if ($_POST["name"]){



            // echo "你的姓名是 ".$_POST["name"];
            foreach($name as $name){

              if($_POST["name"] == $name){


                  echo "我認識你 , 你是".$_POST["name"];
                  $knowYou = 1;

              }

            }

            if (!$knowYou) {

              echo "抱歉 , 我不認識你";

            }

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