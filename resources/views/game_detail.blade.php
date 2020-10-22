@extends('include/master')
@section('content')

	<div class="container-fluid bg-default">
		<iframe width="100%" height="480" src="https://www.youtube.com/embed/RvGaSPTcTxc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<br>
		<small class="font-weight-bold platform-custom mt-5">Nintendo Switch, Steam, Playstation-4, Xbox One</small>
		<div class="container-fluid my-5">
			<div class="row">
				<div class="col-12 col-md-6">
					<h4 class="head">Dead Cells: Special Edition</h4>
					<p class="text-muted"><span class="text-white">●</span> Avaliable Now</p>
				</div>
				<div class="col-12  col-md-6 text-right">
					<br>
					<h5 class="head text-white d-inline">$ 39.99 &nbsp;<span class="pull-right">
						<a href="https://store.steampowered.com/app/588650/Dead_Cells/" type="button" class="btn custom-button btn-warning btn-small" name="submit" id="submit">Buy Now On Steam</a></span></h5>
						<br>
					</div>
					<div class="col-12 col-md-4 py-3 custom-review">
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod."<br>
						- <b>Game Reviewer (4.7/5)</b>
					</div>
					<div class="col-12 col-md-4 py-3 custom-review">
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod."<br>
						- <b>Game Reviewer (4.7/5)</b>
					</div>
					<div class="col-12 col-md-4 py-3 custom-review">
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod."<br>
						- <b>Game Reviewer (4.7/5)</b>
					</div>
				</div>
				<div class="container-fluid my-4">
					<div class="row">
						<div class="col-12 col-md-6 py-3">
							<img src="{{ asset('custom_assets/custom/img/dedc1.jpg') }}" class="img-fluid" alt="responsive image">
						</div>
						<div class="col-12 col-md-6">
							<div class="row">
								<div class="col-6 col-md-6 py-3">
									<img src="{{ asset('custom_assets/custom/img/dedc2.jpg') }}" class="img-fluid" alt="responsive image">
								</div>
								<div class="col-6 col-md-6 py-3">
									<img src="{{ asset('custom_assets/custom/img/dedc3.jpg') }}" class="img-fluid" alt="responsive image">
								</div>
								<div class="col-6 col-md-6 py-3">
									<img src="{{ asset('custom_assets/custom/img/dedc4.jpg') }}" class="img-fluid" alt="responsive image">
								</div>
								<div class="col-6 col-md-6 py-3">
									<img src="{{ asset('custom_assets/custom/img/dedc5.jpg') }}" class="img-fluid" alt="responsive image">
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-6 py-3">
							<img src="{{ asset('custom_assets/custom/img/dedc.png') }}" class="img-fluid" alt="responsive image">
						</div>
						<div class="col-12 col-md-6 py-3">
							<h5 class="head">Dead Cells: Special Edition arrived to the scence.</h5>
							<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<a href="https://playdigious.com/dead-cells/" target="blank" class="btn btn-warning btn-lg">Official Website &nbsp;<i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="container-fluid my-3 custom-req">
					<div class="row">
						<div class="col-12 col-sm-6 py-3">
							<h6 class="text-white"><i class="fas fa-table"></i>&nbsp; Released Date: 5th April, 2020</h6>
						</div>
						<div class="col-12 col-sm-6 py-3">
							<h6 class="text-white"><i class="fas fa-database"></i>&nbsp; Game File Size: 3.0 GB</h6>
						</div>
						<div class="col-12 col-sm-6 py-3">
							<h6 class="text-white"><i class="fas fa-user-friends"></i>&nbsp; Players: 1 Player</h6>
						</div>
						<div class="col-12 col-sm-6 py-3">
							<h6 class="text-white"><i class="fas fa-language"></i>&nbsp; Supported languages: English</h6>
						</div>
					</div>
				</div>
			</div>
		</div>

	@endsection