
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>85度C @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">



</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/zh/c/cd/Logo_85%E5%BA%A6C.png" width="60px" height="60px">
        <a href="{{url('/')}}" style="font-weight:bold; font-family: 王漢宗細黑體繁; font-size:20px; color: #FFFFFF; text-decoration:none;">　85度C線上訂購網</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/store')}}" style="font-size: 14px; font-family: 王漢宗細黑體繁;">商品專區</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 14px; font-family: 王漢宗細黑體繁;">聯絡我們</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 14px; font-family: 王漢宗細黑體繁;">購物車</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 14px; font-family: 王漢宗細黑體繁;">會員專區</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" style="font-size: 14px; font-family: 王漢宗細黑體繁;">登入</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" style="font-size: 14px; font-family: 王漢宗細黑體繁;">註冊</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
@yield('content')
</div>
<!-- /.container -->

<!-- Footer -->
<!--<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
<!--</footer>-->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
