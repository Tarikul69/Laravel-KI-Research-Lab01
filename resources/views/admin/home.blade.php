<!doctype html>
<html lang="en">
  <head>
  	<title>KI Research Lab</title>
    <meta charset="utf-8">
	<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{url('admin/css/style.css')}}">
  </head>
  <body>
 		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="" class="logo">KI Lab<span>ABCDEFGH</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="/adminhome"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="/news"><span class="fa fa-user mr-3"></span> News</a>
	          </li>
	          <li>
              <a href="/project2"><span class="fa fa-briefcase mr-3"></span>Project</a>
	          </li>
	          <li>
              <a href="/team"><span class="fa fa-sticky-note mr-3"></span>Team</a>
	          </li>
	          <!-- <li>
              <a href="#"><span class="fa fa-suitcase mr-3"></span>Abcd</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-cogs mr-3"></span> Abcd</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span>Abcd</a>
	          </li> -->
	        </ul>

	        <!-- <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div> -->
	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | KI Research Lab<i class="icon-heart" aria-hidden="true"></i>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
		@yield('team')
		@yield('editnews')
		@yield('editteam')
		@yield('editproject')
		@yield('adminhome')
        @yield('content')
        @yield('project1')
        </div>
		</div>
        

    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/popper.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/main.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
	@yield('script')

  </body>
</html>