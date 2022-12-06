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

		<section class="shop-area single-product">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="order-2 order-md-1 col-md-4 col-lg-3 col-xl-3">
						<div class=" shop-sidebar">
							<div class="sidebar-widget sidebar-search">
								<input type="text" placeholder="Search Product....">
								<button type="submit"><i class="fas fa-search"></i></button>
							</div>
							<div class="sidebar-widget product-widget">
								<h6>BEST SELLERS</h6>
								<div class="wid-pro">
									<div class="sp-img">
										<img src="{{asset('media/images/product/sb1.jpg')}}" alt="">
									</div>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
										<span>$60</span>
										<span class="pre-price">$80</span>
									</div>
								</div>

								<div class="wid-pro">
									<div class="sp-img">
										<img src="{{asset('media/images/product/sb2.jpg')}}" alt="">
									</div>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
										<span>$60</span>
										<span class="pre-price">$80</span>
									</div>
								</div>

								<div class="wid-pro">
									<div class="sp-img">
										<img src="{{asset('media/images/product/sb3.jpg')}}" alt="">
									</div>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">Contrasting T-Shirt</a></h5>
										<span>$60</span>
										<span class="pre-price">$80</span>
									</div>
								</div>

								<div class="wid-pro">
									<div class="sp-img">
										<img src="{{asset('media/images/product/sb4.jpg')}}" alt="">
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
									<img src="{{asset('images/inta3.jpg')}}" alt="">
								</div>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="order-1 order-md-2 col-md-8 col-lg-9 col-xl-9">
						<div class="row">
							<div class="col-lg-6 col-xl-6">
								<!-- Product View Slider -->
								<div class="quickview-slider">
                                @if(isset($images))
									<div class="slider-for">
                                        @foreach($images as $i)
										<div class="">
											<img src="{{asset('images/'.$i->url)}}" alt="Thumb">
										</div>
                                        @endforeach
									</div>

									<div class="slider-nav">
                                        @foreach($images as $i)
                                            <div class="">
                                                <img src="{{asset('images/'.$i->url)}}" alt="Thumb">
                                            </div>
                                        @endforeach
									</div>
								</div>
                                @endif
								<!-- /.quickview-slider -->
							</div>
							<!-- /.col-xl-6 -->

							@livewire('product',['prd_id' => $id])
							<!-- /.col-xl-6 -->


							<div class="col-xl-12">
								<div class="product-des-tab">
									<ul class="nav nav-tabs " role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ADDITIONAL INFORMATION</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">REVIEWS (1)</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
                                    @if(isset($product))
                                    @foreach($product as $p)
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
											<div class="prod-bottom-tab-sin description">
												<h5>Description</h5>
												<p>{{$p->description}}</p>

											</div>
										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
											<div class="prod-bottom-tab-sin">
												<h5>Additional information</h5>
												<div class="info-wrap">
													<div class="sin-aditional-info">
														<div class="first">
															Brand
														</div>
														<div class="secound">
															{{$p->brand}}
														</div>
													</div>
													<div class="sin-aditional-info">
														<div class="first">
															Manufacturer
														</div>
														<div class="secound">
															ThemeCity
														</div>
													</div>
                                                    <div class="sin-aditional-info">
                                                        <div class="first">
                                                            Sizes
                                                        </div>
                                                        <div class="secound">
                                                            {{$p->sizes}}
                                                        </div>
                                                    </div>
													<div class="sin-aditional-info">
														<div class="first">
															Colors
														</div>
														<div class="secound">
                                                            {{$p->colors}}
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
											<div class="prod-bottom-tab-sin">
												<h5>Review (1)</h5>
												<div class="product-review">
													<div class="reviwer">
														<img src="media/images/reviewer.png" alt="">
														<div class="review-details">
															<span>Posted by Tonoy - Published on	March 22, 2018</span>
															<p>But I must explain to you how all this mistaken idea of denouncipleasure and praisi pain was born and I will give you a complete.</p>
														</div>
													</div>
													<div class="add-your-review">
														<h6>ADD A REVIEW</h6>
														<p>YOUR RATING* </p>

														@livewire('comment',['prd_id' => $id])
													</div>
												</div>
											</div>
										</div>
									@endforeach
                                    @endif
                                    </div>
								</div>
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /.col-xl-9 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.shop-area -->

		<section class="main-product padding-120">
			<div class="container container-two">
				<div class="section-heading">
					<h3>related <span>product</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row inner-wrapper">
					<!-- Single product -->
					<div class="col-sm-6 col-lg-3 col-xl-3">
						<div class="sin-product">
							<div class="pro-img">
								<img src="{{asset('media/images/product/8.jpg')}}" alt="">
							</div>
							<div class="mid-wrapper">
								<h5 class="pro-title"><a href="product.html">Bandage Dresses</a></h5>
								<span>$60.00</span>
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Single product -->
					<div class="col-sm-6 col-lg-3 col-xl-3">
						<div class="sin-product">
							<div class="pro-img">
								<img src="{{asset('media/images/product/1.jpg')}}" alt="">
							</div>
							<div class="mid-wrapper">
								<h5 class="pro-title"><a href="product.html">High-Low Dresses</a></h5>
								<span>$60.00</span>
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Single product -->
					<div class="col-sm-6 col-lg-3 col-xl-3">
						<div class="sin-product">
							<div class="pro-img">
								<img src="{{asset('media/images/product/2.jpg')}}" alt="">
							</div>
							<div class="mid-wrapper">
								<h5 class="pro-title"><a href="product.html">Empire Waist Dresses</a></h5>
								<span>$60.00</span>
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Single product -->
					<div class="col-sm-6 col-lg-3 col-xl-3">
						<div class="sin-product">
							<div class="pro-img">
								<img src="{{asset('media/images/product/3.jpg')}}" alt="">
							</div>
							<div class="mid-wrapper">
								<h5 class="pro-title"><a href="product.html">Bodycon Dresses</a></h5>
								<span>$60.00</span>
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Row End -->
			</div>
			<!-- Container  -->
		</section>
		<!-- main-product -->

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
    </main>
@endsection
