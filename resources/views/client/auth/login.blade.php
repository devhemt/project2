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
							<p><a href="#">Home  |</a> Login</p>
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
					<h3>Login <span>Account</span></h3>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
						<div class="contact-form login-form">
							<form method="POST" action="{{ url('/login') }}">
                                @csrf
								<div class="row">
									<div class="col-xl-12">
										<input name="email" type="email" placeholder="Email">
									</div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
									<div class="col-xl-12">
										<input name="password" type="password" placeholder="Password">
									</div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
									<div class="col-xl-12">
										<input type="submit" value="LOG IN">
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
					<span>Dont have account</span>
					<a href="{{ url('createacc') }}" class="btn-two">Create Account</a>
				</div>
				<!-- /.col-12 -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.login-now -->
    </main>
@endsection
