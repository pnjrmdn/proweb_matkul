<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | E-Shopper</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/price-range.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
  	<link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">
  	<link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js')?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js')?>"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
  <header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2685387418845</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> e-shopper@gmail.com.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo base_url('assets/images/home/logo.png')?>" alt="" /></a>
						</div>



						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="<?php echo base_url('web/checkout')?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url('web/cart')?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php echo base_url('web/login')?>"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url('web/index')?>">Home</a></li>
								<li class="dropdown"><a href="#" class="active">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url('web/shop')?>" class="active">Products</a></li>
										<li><a href="<?php echo base_url('web/productdetails')?>">Product Details</a></li>
										<li><a href="<?php echo base_url('web/checkout')?>">Checkout</a></li>
										<li><a href="<?php echo base_url('web/cart')?>">Cart</a></li>
										<li><a href="<?php echo base_url('web/login')?>">Login</a></li>
                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url('web/blog')?>">Blog List</a></li>
										<li><a href="<?php echo base_url('web/blogsingle')?>">Blog Single</a></li>
                                    </ul>
                                </li>
								<li><a href="<?php echo base_url('web/contactus')?>">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Nike </a></li>
											<li><a href="">Under Armour </a></li>
											<li><a href="">Adidas </a></li>
											<li><a href="">Puma</a></li>
											<li><a href="">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Adidas</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Ripcurl</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Vans</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Levi's</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Nike</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->

						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>Rp. 1.000</b> <b class="pull-right">Rp. 1.000.000</b>
							</div>
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo base_url('assets/images/home/shipping.jpg')?>" alt="" />
						</div><!--/shipping-->
					</div>
				</div>
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Latest From our Blog</h2>
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="<?php echo base_url('assets/images/blog/blog-one.jpg')?>" alt="">
							</a>
							<p>
								Jual Kaos, Jaket, dan Sweater dengan desain unik dan terlengkap
Kaos sudah menjadi bagian dari gaya dan fashion sehari-hari, baik kaos pria maupun kaos wanita. e-shopper menawarkan koleksi kaos, t-shirt dan berbagai barang fashion pelengkap outfit kamu seperti jaket, hoodie, sweater sampai aksesoris gadget buat kamu tampil gaya. Kamu bisa memilih ratusan koleksi kaos di sini mulai dari kaos basic, kaos tipografi, kaos quote lucu, kaos musik, dan masih banyak lagi, yang pasti bikin penampilan kamu makin gaya dan menarik.</p> <br>

							<p>
								Bikin T-shirt dan Kaos Custom Online
Suka pakai kaos dan t-shirt tetapi nggak nemu yang cocok? Di e-shopper, kamu bisa membuat kaos custom online dengan desainmu sendiri. Tees.co.id menawarkan fitur t-shirt creator online yang akan membantu kamu membuat desainmu. Kamu bisa membuat kaos pria custom, kaos wanita custom, kaos anak custom, semua merupakan kaos berkualitas dan harga terjangkau.</p> <br>


							<div class="pager-area">
								<ul class="pager pull-right">
									<li><a href="#">Pre</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div><!--/blog-post-area-->

					<div class="rating-area">
						<ul class="ratings">
							<li class="rate-this">Rate this item:</li>
							<li>
								<i class="fa fa-star color"></i>
								<i class="fa fa-star color"></i>
								<i class="fa fa-star color"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
							<li class="color">(6 votes)</li>
						</ul>
						<ul class="tag">
							<li>TAG:</li>
							<li><a class="color" href="">Pink <span>/</span></a></li>
							<li><a class="color" href="">T-Shirt <span>/</span></a></li>
							<li><a class="color" href="">Girls</a></li>
						</ul>
					</div><!--/rating-area-->

					<div class="socials-share">
						<a href=""><img src="<?php echo base_url('assets/images/blog/socials.png')?>" alt=""></a>
					</div><!--/socials-share-->

					<div class="media commnets">
						<a class="pull-left" href="#">
							<img class="media-object" src="<?php echo base_url('assets/images/blog/man-one.jpg')?>" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Wahid</h4>
							<p>Kamu yang punya banyak karya, ide, gambar dan desain dapat membuka toko online tanpa modal di e-shpper cetak desainmu di kaos, jaket, topi, aksesoris gadget dan tas dan dapatkan keuntungan dari setiap penjualannya. e-shopper menjadi solusi yang baik untuk mencari pendapatan sampingan memanfaatkan kreativitias kamu.</p>
							<div class="blog-socials">
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-dribbble"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								</ul>
								<a class="btn btn-primary" href="">Other Posts</a>
							</div>
						</div>
					</div><!--Comments-->
					<div class="response-area">
						<h2>3 RESPONSES</h2>
						<ul class="media-list">
							<li class="media">

								<a class="pull-left" href="#">
									<img class="media-object" src="<?php echo base_url('assets/images/blog/man-two.jpg')?>" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i>Rayhan</li>
										<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
										<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
									</ul>
									<p>Kamu yang punya banyak karya, ide, gambar dan desain dapat membuka toko online tanpa modal di e-shpper cetak desainmu di kaos, jaket, topi, aksesoris gadget dan tas dan dapatkan keuntungan dari setiap penjualannya. e-shopper menjadi solusi yang baik untuk mencari pendapatan sampingan memanfaatkan kreativitias kamu.</p>
									<a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
								</div>
							</li>
							<li class="media second-media">
								<a class="pull-left" href="#">
									<img class="media-object" src="<?php echo base_url('assets/images/blog/man-three.jpg')?>" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i>Bayu</li>
										<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
										<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
									</ul>
									<p>Kamu yang punya banyak karya, ide, gambar dan desain dapat membuka toko online tanpa modal di e-shpper cetak desainmu di kaos, jaket, topi, aksesoris gadget dan tas dan dapatkan keuntungan dari setiap penjualannya. e-shopper menjadi solusi yang baik untuk mencari pendapatan sampingan memanfaatkan kreativitias kamu.</p>
									<a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
								</div>
							</li>
							<li class="media">
								<a class="pull-left" href="#">
									<img class="media-object" src="<?php echo base_url('assets/images/blog/man-four.jpg')?>" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i>Sayyid</li>
										<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
										<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
									</ul>
									<p>Kamu yang punya banyak karya, ide, gambar dan desain dapat membuka toko online tanpa modal di e-shpper cetak desainmu di kaos, jaket, topi, aksesoris gadget dan tas dan dapatkan keuntungan dari setiap penjualannya. e-shopper menjadi solusi yang baik untuk mencari pendapatan sampingan memanfaatkan kreativitias kamu.</p>
									<a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
								</div>
							</li>
						</ul>
					</div><!--/Response-area-->
					<div class="replay-box">
						<div class="row">
							<div class="col-sm-4">
								<h2>Leave a replay</h2>
								<form>
									<div class="blank-arrow">
										<label>Your Name</label>
									</div>
									<span>*</span>
									<input type="text" placeholder="write your name...">
									<div class="blank-arrow">
										<label>Email Address</label>
									</div>
									<span>*</span>
									<input type="email" placeholder="your email address...">
									<div class="blank-arrow">
										<label>Web Site</label>
									</div>
									<input type="email" placeholder="current city...">
								</form>
							</div>
							<div class="col-sm-8">
								<div class="text-area">
									<div class="blank-arrow">
										<label>Your Name</label>
									</div>
									<span>*</span>
									<textarea name="message" rows="11"></textarea>
									<a class="btn btn-primary" href="">post comment</a>
								</div>
							</div>
						</div>
					</div><!--/Repaly Box-->
				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<!-- <img src="<?php echo base_url('assets/images/home/iframe1.png')?>" alt="" /> -->
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<!-- <img src="<?php echo base_url('assets/images/home/iframe2.png')?>" alt="" /> -->
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<!-- <img src="<?php echo base_url('assets/images/home/iframe3.png')?>" alt="" /> -->
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<!-- <img src="<?php echo base_url('assets/images/home/iframe4.png')?>" alt="" /> -->
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo base_url('assets/images/home/map.png')?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2018 Institut Teknologi Kalimantan</p>
					<p class="pull-right">Designed by Panji Ramadanu<span><a target="_blank" href="#"></a></span></p>p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
<script src="<?php echo base_url('assets/js/price-range.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.scrollUp.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body>
</html>
