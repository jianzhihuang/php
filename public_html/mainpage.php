<?php include("login.php");
	session_start();
	
	include("connection.php");
	
	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['diary'];
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sectret Diary</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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

                        <li><a href="index.php?logout=1">Log Out</a></li>

                    </ul>
        
            </div> 
        </nav>


        <div class="jumbotron heroImage text-center">
            
        <div class="row">
        
                <textarea class="form-control"><?php echo $diary; ?></textarea>
            
        </div>
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

        
        <script>
            // $(".contentContainer").css("min-height",$(window).height());
            $("textarea").css("min-height",$(window).height()*0.8);

            $("textarea").keyup(function() {
            $.post("updatediary.php", {diary:$("textarea").val()})
            
            });



        </script>
    </body>

</html>