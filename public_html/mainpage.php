<?php include("login.php");?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sectret Diary</title>
    <style>
        .heroImage {
            background-image: url("project/image/hero1.jpg");
            height: 550px;
            border-radius: 0;
            background-size: cover;
        }
        
        .footer-height {
            height: 550px;
            margin-bottom: 0;
            padding-top: 150px;
        }
        
        #appstoreImg {
            width: 300px;
        }

        #Sectret{

            font-size:1.7rem;
            color: grey;

        }

    </style>

    <body>
        <nav class="navbar  navbar-expand-xl navbar-light bg-light">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <a href="#" id="Sectret" class="navbar-brand mr-auto font-weight-bold">Sectret Diary</a>

            </div>    
            <div class="pull-right">
                    <ul class="navbar-nav nav">

                        <li><a href="">Log Out</a></li>

                    </ul>
        
            </div> 
        </nav>


        <div class="jumbotron heroImage text-center">
            <textarea name="" class="form-control" id=""></textarea>
            
        </div>
        <div class="container text-center my-5">
            <h1 class="display-4">優 點</h1>
            <p class="lead">為什麼這款軟體如此與眾不同</p>
            <div class="row">
                <div class="col" style="width: 18rem;">
                    <div class="card">
                        <img src="project/image/view.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">標 題</h5>
                            <p class="card-text">這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,</p>
                            <a href="#" class="btn btn-warning">了解更多</a>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="project/image/images.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">標 題</h5>
                            <p class="card-text">這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,</p>
                            <a href="#" class="btn btn-warning">了解更多</a>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card " style="width: 18rem;">
                        <img src="project/image/3.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">標 題</h5>
                            <p class="card-text">這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,這是一段關於軟體優點的描述,</p>
                            <a href="#" class="btn btn-warning">了解更多</a>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="jumbotron text-center footer-height">
            <h1 class="display-4">下載軟體</h1>
            <p class="lead">聯繫方式:p0921442701@163.com</p>
            <img src="project/image/App_Store_(black).png" id="appstoreImg">
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        
        <script>
            $(".contentContainer").css("min-height",$(window).height());
            $("textarea").css("min-height",$(window).height()*0.8);
            $("textarea").keyup(function(){

                alert("changed!");
                $.post("updatediary.php",{diary:$("textarea").val()});

            });


        </script>
    </body>

</html>