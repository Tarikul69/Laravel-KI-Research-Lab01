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
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="assets/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

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
  <body>
 
    <!-- Navigation
    ==========================================-->
     
   
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
            <li><a href="/" class="page-scroll"> Home</a></li>
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
    
     
   
    <!-- Home Page
    ==========================================-->
   <!--  <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome to   <strong><span class="color">KI Research Lab</span></strong></h1>
                <p class="lead">Tagline <strong>Tagline</strong> Tagline <strong>Tagline</strong></p>
             </div>
        </div>
    </div>
 --> 
    <!-- About Us Page
    ==========================================-->
    <!-- <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/02.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>About us</h4>
                            <h2>Some words <strong>about us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">We love building and rebuilding brands through our  specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.</p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->
    <!-- Team Page
    ==========================================-->
    <br>
    <br>
    <br>
    <br>
    <div style="color: white;" id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>KI Lab Members</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
             
                <div  class="">
                @foreach($abc1 as $k)
                <div class="container row">
                    <div class="item col-md-3">
                        <div class="">
                            <a style="pointer-events: none; text-decoration: none; color: white;" href="{{url('edit/'.$k->id)}}">
                                <img src="{{asset($k->img)}}" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>{{$k -> name}}</h3>
                                    <p> {{$k -> rank}}</p>
                                    <p></p>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <p>{!!$k -> bio!!}</p>
                    </div>
                    
                </div>
                <hr>
                @endforeach
                     
 
                </div>
                
            </div>
        </div>
    </div>
 
     
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
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery.isotope.js"></script>

    <script src="assets/js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="assets/js/main.js"></script>

  </body>
</html>