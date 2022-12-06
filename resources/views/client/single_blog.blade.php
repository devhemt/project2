@extends('layout.default')
@section('content')
    <main id="main">

    </main>		<!--=========================-->
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
		<!--=        Product Filter          =-->
		<!--=========================-->


		<section class="main-product pad-45">
			<div class="container">
				<div class="row">
					<!-- single product -->
					<div class="col-lg-8 col-xl-8">
						<article class="sin-blog single-page">
							<figure class="blog-img">
								<img src="media/images/blog/1.jpg" alt="">
							</figure>
							<div class="blog-content">
								<div class="blog-meta">
									<a href="#">15 May</a>
								</div>
								<h5>Shopping for kids</h5>
								<div class="blog-details">
									<p>Lorem ipsum dolor sit amet, consectetur adscing elit. Ut et lectus ut purus dapibus molestie et quis turpis. Pellentesque sed nunc eu metus tristique sagittis ut tristique purus. Nam sodales, urna id elementum sollicitudin, lectus sapien molestie
										enim, a ultricies nibh felis ac nisl. Suspendisse vel lobortis sem.</p>

									<h6>Lorem ipsum dolor sit amet</h6>

									<ul>
										<li>Faucibus pellentesque, mi mi tempor enim, sit amet interdum felis nibh a leo.</li>
										<li>Proin tincidunt. Nunc ultrices hendrerit libero vel malesuada.</li>
										<li>Nulla facilisi. Quisque eu placerat augue, sed vestibulum leo.</li>
										<li>Etiam turpis metus, dignissim tincidunt pharetra ultricies, lobortis at ligula.</li>
									</ul>

									<p>
										Suspendisse nec elit ipsum. Nullam vestibulum leo vitae ipsum cursus posuere. Cras eget porta arcu. Ut vel blandit enim. Suspendisse sit amet leo dolor. Fusce a erat vehicula, fermentum sem ut, dapibus eros. Vivamus pulvinar commodo quam eget dictum.
										Curabitur a metus quis arcu dignissim congue quis sit amet risus. Nulla.</p>

									<blockquote>
										<q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et lectus ut purus dapibus molestie et quis turpis. Pellentesque sed nunc eu metus tristique ut purus.</q>
									</blockquote>

									<p>Donec quis diam in lorem lacinia egestas. Praesent consequat sagittis dui, non iaculis dolor facilisis ac. Nullam sit amet lectus ac sapien porta gravida ut eu nisi. Maecenas at fermentum elit. Aenean quis nibh ullamcorper, volutpat libero in,
										imperdiet quam. </p>

									<p>by <a href="#">Mike Jimi</a></p>

									<div class="social">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</article>


						<div id="comments">
							<div class="comments-list">
								<h4 class="heading"><span>4 Comments</span></h4>
								<div class="commentlists-div">
									<ol class="commentlists">
										<li class="sin-comment  depth-1">
											<div class="the-comment">
												<div class="avatar">
													<img alt="" src="media/images/user1.jpg">
												</div>
												<div class="comment-box">
													<div class="comment-author meta">
														<p class="com-name"><strong>Azad Hossain</strong></p>
														<p>6 months ago <a href="#" class="comment-reply-link"> Reply </a></p>
													</div>
													<div class="comment-text">
														<p>Donec ac libero nisl. Etiam ornare sollicitudin ultricies. Mauris ac purus eros, ac lobortis tortor. Maecenas sed interdum turpis!</p>
													</div>
												</div>
											</div>
											<ul class="children-comment">
												<li class="comment odd alt depth-2">
													<div class="the-comment">
														<div class="avatar">
															<img alt="" src="media/images/user1.jpg">
														</div>
														<div class="comment-box">
															<div class="comment-author meta">
																<p class="com-name"><strong>Biddut</strong></p>
																<p> 9 months ago<a href="#" class="comment-reply-link"> Reply </a></p>
															</div>
															<div class="comment-text">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed sollicitudin lectus. Nunc ut vulputate nisi. Donec nec tincidunt ligula, non porta mi.<br>
																</p>
															</div>
														</div>
													</div>
												</li>
												<!-- #comment-## -->
											</ul>
											<!-- .children -->
										</li>
										<!-- #comment-## -->
										<li class="sin-comment  depth-1">
											<div class="the-comment">
												<div class="avatar">
													<img alt="" src="media/images/user1.jpg">
												</div>
												<div class="comment-box">
													<div class="comment-author meta">
														<p class="com-name"><strong>Sajib Hasan</strong></p>
														<p>6 months ago<a href="#" class="comment-reply-link"> Reply</a></p>
													</div>
													<div class="comment-text">
														<p>Vivamus in semper lorem, id feugiat mi. Ut eu sem lorem. Aliquam vel libero mauris. Integer pellentesque quis mauris eu scelerisque. Vestibulum sodales, velit ut scelerisque mollis.</p>
													</div>
												</div>
											</div>
										</li>
										<!-- #comment-## -->
									</ol>
								</div>
							</div>
							<div class="commentform">
								<div class="comment-respond">
									<div class="comment-reply-title">
										<h4 class="heading">
											<span>Leave a Comment</span>
										</h4>
									</div>
									<form class="comment-form" id="commentform" method="post" action="#">
										<p class="h-info">Your email address will not be published.</p>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="author">Name:</label>
													<input aria-required="true" value="" id="author" class="form-control" name="author" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="email">Email:</label>
													<input aria-required="true" value="" class="form-control" name="email" id="email" type="text">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="url">Website:</label>
											<input value="" class="form-control" name="url" id="url" type="text">
										</div>
										<div class="form-group">
											<label for="comment" class="field-label">Comment:</label>
											<textarea aria-required="true" name="comment" class="form-control" id="comment" rows="8"></textarea>
										</div>
										<p class="form-submit">
											<input value="Post Comment" class="submit" type="submit">
										</p>
									</form>
								</div>
								<!-- #respond -->
							</div>
							<!-- end commentform -->
						</div>
					</div>

					<div class="col-lg-4 col-xl-4">
						<div class="blog-sidebar">

							<div class="blog-widget">
								<h4 class="widget-title">Latest Post</h4>
								<div class="widget-post">
									<div class="widget-post-img">
										<a href="#"><img src="media/images/blog/p1.jpg" alt=""></a>
									</div>
									<div class="widget-post-content">
										<h6 class="wid-post-title">
											<a href="#">Lorem ipsum dolor sit</a></h6>
										<p>Feb 23, 2018</p>
									</div>
								</div>
								<div class="widget-post">
									<div class="widget-post-img">
										<a href="#"><img src="media/images/blog/p2.jpg" alt=""></a>
									</div>
									<div class="widget-post-content">
										<h6 class="wid-post-title">
											<a href="#">Lorem ipsum dolor sit</a></h6>
										<p>Feb 23, 2018</p>
									</div>
								</div>
								<div class="widget-post">
									<div class="widget-post-img">
										<a href="#"><img src="media/images/blog/p3.jpg" alt=""></a>
									</div>
									<div class="widget-post-content">
										<h6 class="wid-post-title">
											<a href="#">Lorem ipsum dolor sit</a></h6>
										<p>Feb 23, 2018</p>
									</div>
								</div>
							</div>
							<!-- /.blog-widget-->

							<div class="blog-widget">
								<h4 class="widget-title">Categories</h4>
								<ul class="wid-category">
									<li><a href="#">animals</a></li>
									<li><a href="#">landscape</a></li>
									<li><a href="#">fashion</a></li>
									<li><a href="#">men dress</a></li>
									<li><a href="#">shoes</a></li>
								</ul>
							</div>
							<!-- /.blog-widget-->

							<div class="blog-widget">
								<h4 class="widget-title">Tags</h4>
								<ul class="widget-tag">
									<li><a href="#">bag</a></li>
									<li><a href="#">kids</a></li>
									<li><a href="#">fashion</a></li>
									<li><a href="#">style</a></li>
									<li><a href="#">red</a></li>
									<li><a href="#">brand</a></li>
									<li><a href="#">dress</a></li>
									<li><a href="#">fest</a></li>
								</ul>
							</div>
							<!-- /.blog-widget-->

						</div>
					</div>
					<!-- /.col-xl-3 -->

				</div>
				<!-- Row End -->
			</div>
			<!-- Container  -->
		</section>
		<!-- main-product -->

		<!--=========================-->
		<!--=   Subscribe area      =-->
		<!--=========================-->

		<section class="subscribe-area">
			<div class="container container-two">
				<div class="row">
					<div class="col-lg-5 col-xl-5">
						<div class="subscribe-text">
							<h6><span>Join our newsletter </span>save 10% off</h6>
							<p>Autem vel eum iriure dolor in hendrerit in vulpuate velit esse molestie consequat vel illum dolore eu olestie.</p>
						</div>
					</div>
					<!-- col-xl-6 -->

					<div class="col-lg-7 col-xl-7">
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

		<!--=========================-->
		<!--=   Instagram area      =-->
		<!--=========================-->

		<section class="instagram-area">
			<div class="instagram-slider owl-carousel owl-theme">
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="media/images/instagram/1.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="media/images/instagram/2.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="media/images/instagram/3.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="media/images/instagram/4.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="media/images/instagram/5.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
			</div>
			<!-- /.instagram-slider end -->
		</section>
		<!-- /.instagram-area end-->

@endsection