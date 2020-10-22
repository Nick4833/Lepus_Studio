@extends('include/master')
@section('content')

	<div class="container mb-5">
		<h1 class="text-white text-center"><i class="fas fa-heart"></i></h1>
		<h4 class="head text-center">Have Some Questions?</h4>
		<p class="text-muted text-center">We'd love to help.</p>
		<div class="row">
			<div class="col-12">
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<span class="text-white">Email</span>
								<input type="email" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="name@example.com">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<span class="text-white">Complaint</span>
								<input type="text" placeholder="Complaint..." class="form-control form-control-alternative" />
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<span class="text-white">Issue Date</span>
							<div class="input-group input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
								</div>
								<input class="form-control datepicker" placeholder="Select date" type="date" value="06/20/2020">
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<span class="text-white">Details</span>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Explain your Complaint in detail."></textarea>
						</div>
					</div>
					<button class="btn btn-block btn-success">Send <i class="fas fa-paper-plane"></i></button>
				</form>
			</div>
		</div>
	</div>

@endsection