@extends('include/master')
@section('content')

	<div class="container-fluid py-3 bg-default">
		<h4 class="head text-center">Explore Our Games</h4>
		<div class="row my-3">
			<div class="col-12 col-md-6 py-3 card-hover">
				<a href="{{ route('game_detail_page') }}">
					<div class="card bg-dark text-white border-0">
						<img class="card-img" src="{{ asset('custom_assets/custom/img/n1.jpg') }}" alt="Card image">
						<div class="card-img-overlay d-flex align-items-center">
							<div>
								<h5 class="h2 card-title text-white mb-2 head">Game One</h5>

								<p class="card-text text-sm font-weight-bold">Released On May 5th, 2020</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-6 py-3 card-hover">
				<a href="{{ route('game_detail_page') }}">
					<div class="card bg-dark text-white border-0">
						<img class="card-img" src="{{ asset('custom_assets/custom/img/td.jpg') }}" alt="Card image">
						<div class="card-img-overlay d-flex align-items-center">
							<div>
								<h5 class="h2 card-title text-white mb-2 head">Game Two</h5>

								<p class="card-text text-sm font-weight-bold">Released On May 5th, 2020</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-3 py-3">
				<a href="{{ route('game_detail_page') }}">
					<div class="card card-hover">
						<img class="card-img-top" src="{{ asset('custom_assets/custom/img/lmbo.jpg') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title head text-dark">Game Three</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-3 py-3">
				<a href="{{ route('game_detail_page') }}">
					<div class="card card-hover">
						<img class="card-img-top" src="{{ asset('custom_assets/custom/img/hpx.jpg') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title head text-dark">Game Four</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-3 py-3">
				<a href="{{ route('game_detail_page') }}">
					<div class="card card-hover">
						<img class="card-img-top" src="{{ asset('custom_assets/custom/img/ss.jpg') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title head text-dark">Game Five</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-3 py-3">
				<a href="{{ route('game_detail_page') }}">
					<div class="card card-hover">
						<img class="card-img-top" src="{{ asset('custom_assets/custom/img/cc.png') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title head text-dark">Game Six</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-3 py-3">
				<a href="{{ route('game_detail_page') }}">
					<div class="card card-hover">
						<img class="card-img-top" src="{{ asset('custom_assets/custom/img/cssg.gif') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title head text-dark">Game Seven</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-3 py-3">
				<a href="{{ route('game_detail_page') }}">
					<div class="card card-hover">
						<img class="card-img-top" src="{{ asset('custom_assets/custom/img/dc.png') }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title head text-dark">Game Eight</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Release Date: April 4th, 2020</small></p>
						</div>
					</div>
				</a>
			</div>
			<hr>
		</div>

@endsection