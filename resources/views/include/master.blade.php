<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lepus Studio</title>
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('custom_assets/custom/img/logo1.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('custom_assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('custom_assets/argon/css/argon-design-system.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('custom_assets/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('custom_assets/custom/css/style.css') }}">
	<script type="text/javascript" src="{{ asset('custom_assets/bootstrap/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('custom_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('custom_assets/argon/js/argon-design-system.min.js') }}"></script>
<body class="bg-default">

	<nav class="navbar fixed-top navbar-custom navbar-expand-lg navbar-dark bg-default">
	    <div class="container">
	        <a class="navbar-brand" href="#"><img alt="Image placeholder" src="{{ asset('custom_assets/custom/img/logo1.png') }}" height="45px"><h5 class="head text-white">Lepus Studio</h5></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbar-default">
	            <div class="navbar-collapse-header">
	                <div class="row">
	                    <div class="col-10 collapse-brand">
	                        <a href="javascript:void(0)">
	                            <img alt="Image placeholder" class="d-inline" src="{{ asset('custom_assets/custom/img/logo1.png') }}" height="40px">
	                            <h6 class="d-inline head text-default"> Lepus Studio</h6>
	                        </a>
	                    </div>
	                    <div class="col-2 collapse-close">
	                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
	                            <span></span>
	                            <span></span>
	                        </button>
	                    </div>
	                </div>
	            </div>
	            
	            <ul class="navbar-nav ml-lg-auto">
	                <li class="nav-item">
	                    <a class="nav-link font-weight-bold" href="{{ route('home_page') }}">
	                        Home
	                    </a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link font-weight-bold" href="{{ route('games_page') }}">
	                        Games
	                    </a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link font-weight-bold" href="{{ route('news_page') }}">
	                        News
	                    </a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link font-weight-bold" href="{{ route('contact_page') }}">
	                        Contact
	                    </a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link font-weight-bold" href="{{ route('jobs_page') }}">
	                        Jobs
	                    </a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link font-weight-bold" href="#" data-toggle="modal" data-target=".bd-example-modal-sm">
	                        Log In
	                    </a>
	                </li>
	            </ul>
	            
	        </div>
	    </div>
	</nav>

	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle"><i class="fab fa-google text-danger"></i>&nbsp; &nbsp;Google Accounts</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-2">
							<a href="#!" class="">
								<img alt="Image placeholder" src="{{ asset('custom_assets/custom/img/logo1.png') }}" height="40px">
							</a>
						</div>
						<div class="col-10">
							<small><b>Lepus Studio</b></small>
							<p><small class="text-muted">Lepusstudio@business.com</small></p>					
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="height: 100px">
			
	</div>

	@yield('content')

	<footer class="footer bg-default">
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-6">
        		<h5 class="text-muted head">Lepus Studio</h5>
      		</div>
      		<div class="col-6">
        		<p class="text-muted font-weight-bold pull-right" style="float:right">Our Social Media<br>
        			<a href=""><i class="fab fa-twitter-square social-icon text-muted"></i></a>
        			<a href=""><i class="fab fa-facebook-square social-icon text-muted"></i></a>
        			<a href=""><i class="fab fa-youtube-square social-icon text-muted"></i></a>
        			<a href=""><i class="fab fa-instagram-square social-icon text-muted"></i></a>
        		</p>
      		</div>
      		<div class="col-12">
      			<p class="text-center text-muted">
      				© 2020 Lepus Studio. All Rights Reserved. Lepus Studio, and the Lepus logo are <br>trademarks of Lepus Studio in the U.S. and/or other countries
      			</p>
      		</div>
      	</div>
      </div>
    </footer>

</body>
</html>