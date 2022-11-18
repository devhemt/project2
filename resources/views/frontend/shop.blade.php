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
		<!--=        Shop area          =-->
		<!--=========================-->

		<section class="shop-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="order-2 order-lg-1 col-lg-3 col-xl-3">
						<div class=" shop-sidebar">
							@livewire('searchshop')

							<div class="sidebar-widget range-widget">
								<h6>SEARCH BY PRICE</h6>
								@livewire('shop-s-b-p')
							</div>

							<div class="sidebar-widget color-widget">
								<h6>PRODUCT COLOR</h6>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
							</div>

							<div class="sidebar-widget product-widget">
								<h6>BEST SELLERS</h6>
								<div class="wid-pro">
									<div class="sp-img">
										<img src="media/images/product/sb1.jpg" alt="">
									</div>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
										<span>$60</span>
										<span class="pre-price">$80</span>
									</div>
								</div>

								<div class="wid-pro">
									<div class="sp-img">
										<img src="media/images/product/sb2.jpg" alt="">
									</div>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
										<span>$60</span>
										<span class="pre-price">$80</span>
									</div>
								</div>

								<div class="wid-pro">
									<div class="sp-img">
										<img src="media/images/product/sb3.jpg" alt="">
									</div>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
										<span>$60</span>
										<span class="pre-price">$80</span>
									</div>
								</div>

								<div class="wid-pro">
									<div class="sp-img">
										<img src="media/images/product/sb4.jpg" alt="">
									</div>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
										<span>$60</span>
										<span class="pre-price">$80</span>
									</div>
								</div>
							</div>

							<div class="sidebar-widget banner-wid">
								<div class="img">
									<img src="media/images/banner/sb1.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="order-1 order-lg-2 col-lg-9 col-xl-9">
						<div class="shop-sorting-area row">
							<div class="col-4 col-sm-4 col-md-6">
								<ul class="nav nav-tabs shop-btn" id="myTab" role="tablist">
									<li class="nav-item ">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="flaticon-menu"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="flaticon-list"></i></a>
									</li>
								</ul>
							</div>
							<!-- /.col-xl-6 -->
							<div class="col-12 col-sm-8 col-md-6">
								<div class="sort-by">
									<span>Sort by :</span>
										@livewire('sortlist')
								</div>
							</div>
							<!-- /.col-xl-6 -->
						</div>
						<!-- /.shop-sorting-area -->
						<div class="shop-content shop-four-grid">
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									@livewire('shop')
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									@livewire('shop2')
									<!-- /.col-xl-12 -->
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
							<div class="load-more-wrapper">
								<a href="create-account.html" class="btn-two">Load More</a>
							</div>
							<!-- /.load-more-wrapper -->
						</div>
						<!-- /.shop-content -->
					</div>
					<!-- /.col-xl-9 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.shop-area -->

	<!--=========================-->
    <!--=   Product Quick view area    =-->
    <!--=========================-->

        <!-- Quick View -->
		<div class="modal quickview-wrapper ">
			<div class="quickview">
				@livewire('quickview')
			</div>
		</div>
    </main>
@endsection