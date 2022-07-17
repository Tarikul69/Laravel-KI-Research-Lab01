<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KI Research Lab</title>
 
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Slider
    ================================================== -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-color: #515151">
    <nav style="background-color: #353535;" id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
         
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><a class="" style="position: left;" href="/"><img class="navbar" src="admin/Logo.svg" style="color: white; hight: 55px; width: 55px;" alt=""></a><b class="" style="font-size: 20px; color: white;">KI Research Lab</b></a> 
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="/notice" class="page-scroll">News</a></li>
            <li><a href="/project" class="page-scroll">Project</a></li>   
            <li><a href="/team10" class="page-scroll">Team</a></li>
            <li><a href="/contact" class="page-scroll">Contact</a></li>
            <li><a href="/join" class="page-scroll">Join With Us</a></li>  

          </ul>
        </div><!-- /.navbar-collapse -->
         
         
      </div><!-- /.container-fluid -->
    </nav>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
<center><h2 style="color: white;">News</h2></center>
<br>
        <div style="color: white;" class="container col-10">
          <h3 class="display-4">{{$data -> name}}</h3>
          <p class="">{!! $data-> notice !!}</p>
          <hr class="my-4">
           
        </div>
   
    </div>

 <!-- 
<h2>{{$data -> name}}</h2>

<p>{{$data -> notice}}</p> -->


        <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>KI RESEARCH LAB ALL RIGHTS RESERVED. COPYRIGHT © <?php echo date("Y"); ?>. </p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery.isotope.js"></script>

    <script src="assets/js/owl.carousel.js')}}"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="assets/js/main.js')}}"></script>

    
    
</body>
</html>