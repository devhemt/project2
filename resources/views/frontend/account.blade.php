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
		<!--=        Breadcrumb         =-->
		<!--=========================-->

		<section class="account-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-xl-3">
						<div class="account-details">
							<p>Account</p>
							<ul>
								<li>John Abraham</li>
								<li>demo@example.com</li>
								<li>18 / d , North Hali </li>
								<li>1652</li>
							</ul>
						</div>
						<!-- /.cart-subtotal -->
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-xl-9">
						<div class="account-table">
							<h6>Order History</h6>
							<table class="tables">
								<thead>
									<tr>
										<th>Order</th>
										<th>Date</th>
										<th>Payment Status </th>
										<th>Fulfillment Status</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="#">#4545454</a>
										</td>
										<td>
											12-05-2017
										</td>
										<td>
											paid
										</td>
										<td>
											fullfilled
										</td>
										<td>
											150$
										</td>

									</tr>
									<!-- /.single product  -->
								</tbody>
								<tbody>
									<tr>
										<td>
											<a href="#">#45585854</a>
										</td>
										<td>
											25-08-2018
										</td>
										<td>
											paid
										</td>
										<td>
											fullfilled
										</td>
										<td>
											180$
										</td>

									</tr>
									<!-- /.single product  -->
								</tbody>
							</table>

						</div>
						<!-- /.cart-table -->
					</div>
					<!-- /.col-xl-9 -->

				</div>
			</div>
		</section>
		<!-- /.cart-area -->

		<!--=========================-->
		<!--=   Subscribe area      =-->
		<!--=========================-->

		<section class="subscribe-area style-two">
			<div class="container container-two">
				<div class="row">
					<div class="col-lg-5">
						<div class="subscribe-text">
							<h6>Join our newsletter</h6>
						</div>
					</div>
					<!-- col-xl-6 -->

					<div class="col-lg-7">
						<div class="subscribe-wrapper">
							<input placeholder="Enter Keyword" type="text">
							<button type="submit">SUBSCRIBE</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-two -->
		</section>
		<!-- subscribe-area -->


    </main><!-- End #main -->
@endsection