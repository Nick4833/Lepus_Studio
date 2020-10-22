@extends('include/master')
@section('content')

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<a href="{{ route('game_detail_page') }}">
					<img class="d-block w-100" src="{{ asset('custom_assets/custom/img/td.jpg') }}" alt="First slide">
				</a>
			</div>
			<div class="carousel-item">
				<a href="{{ route('news_detail_page') }}">
					<img class="d-block w-100" src="{{ asset('custom_assets/custom/img/dc.png') }}" alt="Second slide">
				</a>
			</div>
			<div class="carousel-item">
				<a href="{{ route('news_detail_page') }}">
					<img class="d-block w-100" src="{{ asset('custom_assets/custom/img/ss.jpg') }}" alt="Third slide">
				</a>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container-fluid py-3 bg-default">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 my-3 mb-5">
					<h3 class="head text-center font-weight-bold">Explore Our Latest Games</h3>
				</div>
				<div class="card-columns">
					<a href="{{ route('game_detail_page') }}">
						<div class="card card-hover">
							<img class="card-img-top" src="{{ asset('custom_assets/custom/img/bar.png') }}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title head text-dark">Bar Story</h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
								<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020
								</small></p>
							</div>
						</div>
					</a>
					<a href="{{ route('game_detail_page') }}">
						<div class="card card-hover">
							<img class="card-img-top" src="{{ asset('custom_assets/custom/img/lmbo.jpg') }}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title head text-dark">HotLine Miami</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
								<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
							</div>
						</div>
					</a>
					<a href="{{ route('game_detail_page') }}">
						<div class="card card-hover">
							<img class="card-img-top" src="{{ asset('custom_assets/custom/img/cc.png') }}" alt="Card image cap">
						</div>
					</a>
					<a href="{{ route('game_detail_page') }}">
						<div class="card card-hover">
							<img class="card-img" src="{{ asset('custom_assets/custom/img/cssg.gif') }}" alt="Card image">
						</div>
					</a>
					<a href="{{ route('game_detail_page') }}">
						<div class="card card-hover">
							<img class="card-img-top" src="{{ asset('custom_assets/custom/img/hpx.jpg') }}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title head text-dark">Celeste</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
								<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<hr class="line">
		<div class="container-fluid">
			<h3 class="head text-center font-weight-bold">Latest News</h3>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6 py-3">
						<a href="{{ route('game_detail_page') }}">
							<div class="card card-hover">
								<img class="card-img-top" src="{{ asset('custom_assets/custom/img/n1.jpg') }}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title head text-dark">Our Latest Game just released !!</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-6 py-3">
						<a href="{{ route('news_detail_page') }}">
							<div class="card card-hover">
								<img class="card-img-top" src="{{ asset('custom_assets/custom/img/new1.png') }}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title head text-dark">Crash 4: It's About Time Review</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 py-3">
						<a href="{{ route('news_detail_page') }}">
							<div class="card card-hover">
								<img class="card-img-top" src="{{ asset('custom_assets/custom/img/n3.jpg') }}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title head text-dark">News 3</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 py-3">
						<a href="{{ route('news_detail_page') }}">
							<div class="card card-hover">
								<img class="card-img-top" src="{{ asset('custom_assets/custom/img/ss.jpg') }}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title head text-dark">News 4</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4 py-3">
						<a href="{{ route('news_detail_page') }}">
							<div class="card card-hover">
								<img class="card-img-top" src="{{ asset('custom_assets/custom/img/n5.jpg') }}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title head text-dark">News 5</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div>

@endsection