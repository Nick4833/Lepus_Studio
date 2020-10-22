@extends('include/master')
@section('content')

	<div class="container-fluid py-3 bg-default">
		<h3 class="head text-center font-weight-bold">Our Latest News</h3>
		<div class="row my-3">
			<div class="col-12 col-md-6 py-3 card-hover">
				<a href="{{ route('news_detail_page') }}">
					<div class="card bg-dark text-white border-0">
						<img class="card-img" src="{{ asset('custom_assets/custom/img/n5.png') }}" alt="Card image">
						<div class="card-img-overlay d-flex align-items-center">
							<div>
								<p class="h2 card-title text-white head">Special News One</p>

								<p class="card-text text-sm font-weight-bold">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-6 py-3 card-hover">
				<a href="{{ route('news_detail_page') }}">
					<div class="card bg-dark text-white border-0">
						<img class="card-img" src="{{ asset('custom_assets/custom/img/ss.jpg') }}" alt="Card image">
						<div class="card-img-overlay d-flex align-items-center">
							<div>
								<p class="h2 card-title text-white head">Special News Two</p>

								<p class="card-text text-sm font-weight-bold">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-6 py-3 card-hover">
				<a href="{{ route('news_detail_page') }}">
					<div class="card bg-dark text-white border-0">
						<img class="card-img" src="{{ asset('custom_assets/custom/img/n3.jpg') }}" alt="Card image">
						<div class="card-img-overlay d-flex align-items-center">
							<div>
								<p class="h2 card-title text-white head">Special News Three</p>

								<p class="card-text text-sm font-weight-bold">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-6 py-3 card-hover">
				<a href="{{ route('news_detail_page') }}">
					<div class="card bg-dark text-white border-0">
						<img class="card-img" src="{{ asset('custom_assets/custom/img/dc.png') }}" alt="Card image">
						<div class="card-img-overlay d-flex align-items-center">
							<div>
								<p class="h2 card-title text-white head">Special News Four</p>

								<p class="card-text text-sm font-weight-bold">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-12 py-2 card-hover">
				<a href="{{ route('news_detail_page') }}" class="stretched-link">
					<div class="card bg-default">
						<!-- Card body -->
						<div class="card-body">
							<div class="row">
								<div class="col-12 col-md-2 py-2">
									<a href="#" class="">
										<img alt="Image placeholder" src="{{ asset('custom_assets/custom/img/new1.png') }}" class="img-fluid">
									</a>
								</div>
								<div class="col-12 col-md-10 py-2">
									<h4 class="mb-0">
										<h6 class="font-weight-bold text-white">News Three: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </h6>
									</h4>

									<small class="text-sm text-muted mb-0">John Snow</small>

									<span class="text-danger">●</span>
									<small class="text-muted">March 3rd, 2020</small>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-12 py-2 card-hover">
				<a href="{{ route('news_detail_page') }}" class="stretched-link">
					<div class="card bg-default">
						<!-- Card body -->
						<div class="card-body">
							<div class="row">
								<div class="col-12 col-md-2 py-2">
									<a href="#" class="">
										<img alt="Image placeholder" src="{{ asset('custom_assets/custom/img/n6.jpg') }}" class="img-fluid">
									</a>
								</div>
								<div class="col-12 col-md-10 py-2">
									<h4 class="mb-0">
										<h6 class="font-weight-bold text-white">News Three: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </h6>
									</h4>

									<small class="text-sm text-muted mb-0">John Snow</small>

									<span class="text-danger">●</span>
									<small class="text-muted">March 3rd, 2020</small>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-12 py-2 card-hover">
				<a href="{{ route('news_detail_page') }}" class="stretched-link">
					<div class="card bg-default">
						<!-- Card body -->
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-12 col-md-2 py-2">
									<a href="#" class="">
										<img alt="Image placeholder" src="{{ asset('custom_assets/custom/img/n7.jpg') }}" class="img-fluid">
									</a>
								</div>
								<div class="col-12 col-md-10 py-2">
									<h4 class="mb-0">
										<h6 class="font-weight-bold text-white">News Five: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </h6>
									</h4>

									<small class="text-sm text-muted mb-0">John Snow</small>

									<span class="text-danger">●</span>
									<small class="text-muted">March 3rd, 2020</small>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-12 py-2 card-hover">
				<a href="{{ route('news_detail_page') }}" class="stretched-link">
					<div class="card bg-default">
						<!-- Card body -->
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-12 col-md-2 py-2">
									<a href="#" class="">
										<img alt="Image placeholder" src="{{ asset('custom_assets/custom/img/n8.jpg') }}" class="img-fluid">
									</a>
								</div>
								<div class="col-12 col-md-10 py-2">
									<h4 class="mb-0">
										<h6 class="font-weight-bold text-white">News Six: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </h6>
									</h4>

									<small class="text-sm text-muted mb-0">John Snow</small>

									<span class="text-danger">●</span>
									<small class="text-muted">March 3rd, 2020</small>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<hr>
		</div>
	</div>


@endsection