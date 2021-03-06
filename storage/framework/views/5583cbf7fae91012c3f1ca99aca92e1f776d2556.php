<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $__env->yieldContent('head'); ?>
    <link href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/price-range.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/animate.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('frontend/css/main.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('frontend/css/responsive.css')); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('frontend/images/apple-touch-icon-144-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('frontend/images/apple-touch-icon-114-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('frontend/images/apple-touch-icon-72-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('frontend/images/apple-touch-icon-57-precomposed.png')); ?>">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +0368701680</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> vg.duchieu0602@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
							<a href="index.html"><img src="<?php echo e(asset('frontend/images/logo.png')); ?>" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								
								<li><a href=""><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<li><a href="<?php echo e(route('login')); ?>"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
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
								<li><a href="<?php echo e(route('home')); ?>" class="active">Trang ch???</a></li>
								
								
								<li><a href="<?php echo e(route('contact')); ?>">Li??n h???</a></li>
								
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
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>FIGURES, GIFTS, TECHNOLOGY</h2>
									<h2>ACCESSORIES & DECORATIVE</h2>
									<p>ESHOPPER l?? trang mua s???m tr???c tuy???n s???n ph???m ????? ch??i m?? h??nh & Qu?? t???ng c??ng ngh???. Th?????ng xuy??n theo d??i website c???a ch??ng m??nh ????? li??n t???c ???????c c???p nh???t nh??  </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo e(asset('frontend/images/slide1.jpg')); ?>" class="product img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>FIGURES, GIFTS, TECHNOLOGY</h2>
									<h2>ACCESSORIES & DECORATIVE</h2>
									<p>ESHOPPER l?? trang mua s???m tr???c tuy???n s???n ph???m ????? ch??i m?? h??nh & Qu?? t???ng c??ng ngh???. Th?????ng xuy??n theo d??i website c???a ch??ng m??nh ????? li??n t???c ???????c c???p nh???t nh??  </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo e(asset('frontend/images/slide2.jpg')); ?>" class="product img-responsive" alt="" />
									
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>FIGURES, GIFTS, TECHNOLOGY</h2>
									<h2>ACCESSORIES & DECORATIVE</h2>
									<p>ESHOPPER l?? trang mua s???m tr???c tuy???n s???n ph???m ????? ch??i m?? h??nh & Qu?? t???ng c??ng ngh???. Th?????ng xuy??n theo d??i website c???a ch??ng m??nh ????? li??n t???c ???????c c???p nh???t nh??  </p>

									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo e(asset('frontend/images/slide3.jpg')); ?>" class="product img-responsive" alt="" />
									
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh m???c s???n ph???m</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo e(route('show_category_home',['id'=>$item->id])); ?>"><?php echo e($item->name); ?></a></h4>
								</div>
							</div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Th????ng hi???u s???n ph???m</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('show_brand_home',['id'=>$item->id])); ?>"><?php echo e($item->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


								</ul>
							</div>
						</div><!--/brands_products-->

						

						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">




                    <?php echo $__env->yieldContent('content'); ?>





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
							<p>FIGURES, GIFTS, TECHNOLOGY, ACCESSORIES & DECORATIVE</p>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo e(asset('frontend/images/map.png')); ?>" alt="" />
							<p>Nguy???n L????ng B???ng, ?????ng ??a, H?? N???i, Vi???t Nam</p>
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
							<h2>Ch??m s??c kh??ch h??ng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trung t??m tr??? gi??p</a></li>
								<li><a href="#">Shopee Blog</a></li>
								<li><a href="#">Shopee Mall</a></li>
								<li><a href="#">H?????ng d???n mua h??ng</a></li>
								<li><a href="#">H?????ng d???n b??n h??ng</a></li>
								<li><a href="#">Thanh to??n</a></li>
								<li><a href="#">V???n chuy???n</a></li>
								<li><a href="#">Tr??? h??ng & Ho??n ti???n</a></li>
								<li><a href="#">Ch??m s??c kh??ch h??ng</a></li>
								<li><a href="#">Ch??nh s??ch b???o h??nh</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>V??? E-Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Gi???i thi???u v??? E-Shopper Vi???t Nam</a></li>
								<li><a href="#">Tuy???n d???ng</a></li>
								<li><a href="#">??i???u kho???n E-Shopper</a></li>
								<li><a href="#">Ch??nh s??ch b???o m???t</a></li>
								<li><a href="#">Ch??nh h??ng</a></li>
								<li><a href="#">K??nh ng?????i b??n</a></li>
								<li><a href="#">Flash Sales</a></li>
								<li><a href="#">Ch????ng tr??nh ti???p th??? li??n k???t</a></li>
								<li><a href="#">Li??n h??? v???i truy???n th??ng</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="single-widget">

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
					<p class="pull-left">Copyright ?? 2021 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">vuongduchieu</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->




    <script src="<?php echo e(asset('frontend/js/jquery.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/jquery.scrollUp.min.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\shoplaravel\resources\views/welcome.blade.php ENDPATH**/ ?>