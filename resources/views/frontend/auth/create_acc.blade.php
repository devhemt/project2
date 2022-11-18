@extends('layout.default')
@section('content')
    <main id="main">
        <!--=========================-->
		<!--=        Breadcrumb         =-->
		<!--=========================-->

		<section class="breadcrumb-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-xl-12">
						<div class="bc-inner">
							<p><a href="#">Home  |</a> Shop</p>
						</div>
					</div>
					<!-- /.col-xl-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>

		<!--=========================-->
		<!--=        Login         =-->
		<!--=========================-->



		<!--Login  area
		============================================= -->

		<section class="contact-area">
			<div class="container-fluid custom-container">
				<div class="section-heading pb-30">
					<h3>Create <span>Account</span></h3>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
						<div class="contact-form login-form">
							<form action="#">
								<div class="row">
									<div class="col-xl-12">
										<input type="text" placeholder="First Name*">
									</div>
									<div class="col-xl-12">
										<input type="text" placeholder="Last Name*">
									</div>
									<div class="col-xl-12">
										<input type="text" placeholder="Email*">
									</div>
									<div class="col-xl-12">
										<input type="text" placeholder="Password*">
									</div>
									<div class="col-xl-12">
										<input type="submit" value="CREATE">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /.row end -->
			</div>
			<!-- /.container-fluid end -->
		</section>
		<!-- /.contact-area end -->

		<section class="login-now">
			<div class="container-fluid custom-container">
				<div class="col-12">
					<span>Already have account</span>
					<a href="{{ url('login') }}" class="btn-two">Login now</a>
				</div>
				<!-- /.col-12 -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.login-now -->
    </main>
@endsection