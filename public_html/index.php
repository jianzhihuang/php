<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <title>天氣預報網站</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js'></script>
    <style type="text/css">

    .heroImage{


        background-image: url("weather_BG.jpg");
        border-radius: 0;
        height: 100vh;
        margin-bottom: 0;
        background-size: cover;


    }

    .alert {

        display: none;


    }

    </style>
</head>

<body>


    <div class="jumbotron heroImage text-center">

    <div class="container">
        <h1 class="display-4 text-light mt-5">天氣預報</h1>

        <p class="lead text-light">請在如下輸入框你要查詢的<strong class="text-warning">城市名稱</strong></p>
        <form action="">

        <div class="form-group col-md-7 mx-auto" >

        <input id="city" type="text"   name="city" class="form-control" placeholder="例如. London , Paris , San Francisco...">

        </div>


        </form>
        
        <button id="findMyWeather" type="submit" name="submit" class="btn btn-warning btn-lg">查 詢</button>

        <div class="col-8 mx-auto mt-3">

            <div id="success" class="alert alert-success">查詢成功</div>

            <div id="fail" class="alert alert-danger">無法找到你查詢的城市,請重新在試</div>

            <div id="noCity" class="alert alert-danger">請輸入城市名稱!</div>

        </div>
    </div>

    </div>
    <script type="text/javascript">

    $("#findMyWeather").click(function(event){

        event.preventDefault();

        if ($("#city").val() != ""){

            $.get("scraper.php?city="+$("#city").val(), function(date){

                if(date == ""){

                    $("#fail").fadeIn();


                    }else{


                        $("#success").html(data).fadeIn();


                    }

                }

            });


        }else{

            $("#noCity").fadeIn();

        }



    });

</script>


</body>

</html>