<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <title>網站聯繫表單</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <style type="text/css">
        body {
            background-color: #F2F3F5;
        }
        
        #container {
            padding-top: 60px;
            width: 600px;
            margin: auto;
            font-family: "Helvetica Neue", "Helvetica", "Arial";
        }
        
        .input-style {
            border-radius: 5px;
            border: 1px solid grey;
            font-size: 1.1em;
            padding-left: 20px;
            margin-bottom: 10px;
        }
        
        .input-width {
            width: 300px;
            height: 40px;
        }
        
        #mail-gender {
            width: 323px;
            height: 40px;
        }
        
        label {
            width: 200px;
            float: left;
            font-size: 1.2em;
            padding-top: 8px;
        }
        
        #mail-message {
            width: 500px;
            padding-top: 15px;
        }
        
        #submitButton {
            background-color: #AA47BC;
            color: white;
            width: 523px;
            height: 40px;
        }
        
        #error {
            color: red;
        }
    </style>
</head>

<body>

    <div id="container"></div>

    <form id="validationForm" action="mail.php" method="$_POST">

        <label for="email-name">姓 名</label>
        <input id="email-name" class="input-style input-width" type="text" name="name" placeholder="請輸入你的姓名">

        <label for="email-address">電子郵箱</label>
        <input id="email-address" class="input-style input-width" type="text" name="email" placeholder="請輸入你的郵箱">

        <label for="mail-gender">性 別</label>
        <select name="gender" id="mail-gender" class="input-style">
        <option value="male">男 性</option>
        <option value="female">女 性</option>
    </select>


        <label for="pass1">密碼</label>
        <input id="pass1" class="input-style input-width" type="password" name="pass1" placeholder="密 碼">

        <label for="pass2">確認密碼</label>
        <input id="pass2" type="password" class="input-style input-width" name="pass2" placeholder="確認密碼">

        <textarea name="meassage" id="mail-message" class="input-style" cols="30" rows="10" placeholder="請描述你的狀況"></textarea>

        <button id="submitButton" class="input-style" type="submit" name="submit">發送郵件</button>


    </form>

    <div id="error"></div>

    <script type="text/javascript">
        $("#validationForm").submit(function(event) {

            


            event.preventDefault();
            var name = $("#email-name").val();
            var email = $("#email-address").val();
            var pass1 = $("#pass1").val();
            var pass2 = $("#pass2").val();
            var meassage = $("#mail-message").val();
            var submit = $("#submitButton").val();

            // $("#error").load("mail.php",{

            //     name : name,
            //     email : email,
            //     pass1 : pass1,
            //     pass2 : pass2,
            //     meassage : meassage,
            //     submit : submit ,

            // });

        });
    </script>


</body>

</html>