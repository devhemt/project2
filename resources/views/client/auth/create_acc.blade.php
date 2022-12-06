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
							<form accept-charset="utf-8" action="{{ route('register.custom') }}" role="form" method="POST">
                                @csrf
								<div class="row">
									<div class="col-xl-12">
										<input name="name" type="text" placeholder="Name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
									</div>
									<div class="col-xl-12">
										<input name="email" type="email" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
									</div>
									<div class="col-xl-12">
										<input name="phone" type="tel" placeholder="Phone">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
									</div>
                                    <div class="col-xl-12">
                                        <input name="address" type="text" placeholder="Address">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
									<div class="col-xl-12">
										<input name="password" type="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
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
