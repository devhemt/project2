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
					<div class="order-1 order-md-2 col-md-8 col-lg-9 col-xl-9">
						<div class="row">
							<div class="col-lg-6 col-xl-6">
								<!-- Product View Slider -->
								<div class="quickview-slider">
									<div class="slider-for">
										<div class="">
											<img src="media/images/product/single/b1.jpg" alt="Thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b2.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b3.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b4.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b5.jpg" alt="Thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b1.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b2.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b3.jpg" alt="thumb">
										</div>
									</div>

									<div class="slider-nav">

										<div class="">
											<img src="media/images/product/single/b1.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b2.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b3.jpg" alt="thumb">
										</div>
										<div class="">
											<div class="">
												<img src="media/images/product/single/b4.jpg" alt="Thumb">
											</div>
										</div>
										<div class="">
											<img src="media/images/product/single/b5.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b1.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b2.jpg" alt="thumb">
										</div>
										<div class="">
											<img src="media/images/product/single/b3.jpg" alt="thumb">
										</div>
									</div>
								</div>
								<!-- /.quickview-slider -->
							</div>
							<!-- /.col-xl-6 -->

							<div class="col-lg-6 col-xl-6">
								<div class="product-details">
									<h5 class="pro-title"><a href="#">Woman fashion dress</a></h5>
									<span class="price">Price : $387</span>
									<div class="size-variation">
										<span>size :</span>
										<select name="size-value">
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
									<option value="">5</option>
								</select>
									</div>
									<div class="color-checkboxes">
										<h4>Color:</h4>
										<input class="color-checkbox__input" id="col-Blue" name="colour" type="radio">
										<label class="color-checkbox" for="col-Blue" id="col-Blue-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Green" value="#8bc34a" name="colour" type="radio">
										<label class="color-checkbox" for="col-Green" id="col-Green-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Yellow" value="#fdd835" name="colour" type="radio">
										<label class="color-checkbox" for="col-Yellow" id="col-Yellow-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Orange" value="#ff9800" name="colour" type="radio">
										<label class="color-checkbox" for="col-Orange" id="col-Orange-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Red" value="#f44336" name="colour" type="radio">
										<label class="color-checkbox" for="col-Red" id="col-Red-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Black" value="#222222" name="colour" type="radio">
										<label class="color-checkbox" for="col-Black" id="col-Black-label"></label>
										<span></span>
									</div>

									<div class="add-tocart-wrap">
										<!--PRODUCT INCREASE BUTTON START-->
										<div class="cart-plus-minus-button">
											<input type="text" value="1" name="qtybutton" class="cart-plus-minus">
										</div>
										<a href="#" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to Cart</a>
									</div>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
										irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet</li>
										<li>quis nostrud exercitation ullamco</li>
										<li>Duis aute irure dolor in reprehenderit</li>
									</ul>
									<div class="product-social">
										<span>Share :</span>
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>

								</div>
								<!-- /.product-details -->
							</div>
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
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
											<div class="prod-bottom-tab-sin description">
												<h5>Description</h5>
												<p>But I must explain to you how all this taken idea of denouncipleasure and praisi pain was born and I will give you a complete accoun syste and expound the actu teachings of the great explorer of tmaster-builder of human happiness. No one rejects,
													dislikes, or avoids pleasure beca pleasure, but because those how.But I must explain to you how all this mistaken idea of denouncipleasure and praisi pain was born and I will give you a complete accoun system, and expound the actu teachings
													of the great explorer of tmaster-builder.</p>
												<p>But I must explain to you how all this taken idea of denouncipleasure and praisi pain was born and I will give you a complete accoun syste and expound the actu teachings of the great explorer mistaken idea of denouncipleasure and praisi pain</p>
												<ul>
													<li>Lorem ipsum dolor sit amet</li>
													<li>quis nostrud exercitation ullamco</li>
													<li>Duis aute irure dolor in reprehenderit</li>
													<li>Lorem ipsum dolor sit amet</li>
												</ul>
												<p>Lorem ipsum dolor sit amet Duis aute irure dolor in denouncipleasure and praisi pain was born.Lorem ipsum dolor sit amet Duis aute irure dolor in denouncipleasure and praisi pain was born.</p>

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
															ThemeIM
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
															Colors
														</div>
														<div class="secound">
															Black, Blue, Brown, Gray
														</div>
													</div>
													<div class="sin-aditional-info">
														<div class="first">
															Brand
														</div>
														<div class="secound">
															ThemeIM
														</div>
													</div>
													<div class="sin-aditional-info">
														<div class="first">
															Brand
														</div>
														<div class="secound">
															ThemeIM
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

														<div class="raing-form">
															<form action="#">
																<input type="text" placeholder="">
																<input type="text">
																<textarea name="rating-form"></textarea>
																<input type="submit">
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
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
								<img src="media/images/product/8.jpg" alt="">
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
								<img src="media/images/product/1.jpg" alt="">
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
								<img src="media/images/product/2.jpg" alt="">
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
								<img src="media/images/product/3.jpg" alt="">
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