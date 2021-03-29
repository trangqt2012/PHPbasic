<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>World - Blog &amp; Magazine Template</title>

    <link rel="icon" href="{{asset('/img/core-img/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>

<body>

<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>


<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="?action=home"><img src="{{asset('/img/core-img/logo.png')}}" alt="Logo"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{URL::to('/home')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('/catagory')}}">Catagory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('/single-blog')}}">Single Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
                            </li>
                        </ul>

                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <a href="#"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>
                    <div class="copywrite-text mt-30">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <ul class="footer-menu d-flex justify-content-between">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <h5>Subscribe</h5>
                    <form action="#" method="post">
                        <input type="email" name="email" id="email" placeholder="Enter your mail">
                        <button type="button"><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>

<script src="{{asset('/js/jquery/jquery-2.2.4.min.js')}}"></script>

<script src="{{asset('/js/popper.min.js')}}"></script>

<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<script src="{{asset('/js/plugins.js')}}"></script>

<script src="{{asset('/js/active.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());


    gtag('config', 'UA-23581568-13');
</script>

</html>
