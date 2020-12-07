<!doctype html>
<?php include('header.php'); ?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mimosa-Responsive eCommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- ionicons.min css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
		<!-- nivo-slider.css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="blog">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- page-wraper-start -->
		<div id="page-wraper">
			<!-- header-area-start -->
			<header>
				
			</header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<?php 
											include_once '../core/ForumM.php';
											$post=new ForumManage();
							    			$posts=$post->afficherPost();
				
											
											
											?>
								<h2>blog</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">blog</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<!-- blog-total-area-start -->
							<div class="blog-total-area mb-40-2">
								<div class="row">
									
									<?php foreach ($posts as $row) { ?>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<!-- single-blog-2-start -->
										<div class="single-blog single-blog-2 mb-30">
											<div class="blog-2-img">
												<!-- <a href="blog-details.html"><img src="<?php //echo $row['image']; ?>" alt="man" /></a>-->
											</div>
											<div class="blog-2-content blog-content">
												<?php 
											$timeadd=$row['date_post'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
												<span><?php echo $monthName." ".$day.", ".$year; ?></span>
												<h3><a href="forum-detail.php?id=<?php echo$row['id']; ?>"><?php echo $row['titre']; ?></a></h3>
												
												<p><?php 
												$text=$row['post'];
												$text1=substr($text, 0, 200);
												echo $text1; ?></p>
												<a href="forum-detail.php?id=<?php echo $row['id']; ?>">Lire Plus ...</a>
												<div class="meta">
													
													<a href="like-post.php?id=<?php echo $row['id']; ?>"><i class="fa fa-heart-o"></i><?php echo $row['likes']; ?></a>
												</div>
											</div>
										</div>
										<!-- single-blog-2-end -->
									</div>
									<?php } ?>
								</div>
								<!-- page-numbers-start -->
								<div class="page-numbers mb-3">
									<ul>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
									</ul>
								</div>
								<!-- page-numbers-end -->
							</div>
							<!-- blog-total-area-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<!-- blog-right-area-start -->
							<div class="blog-right-area">
								<!-- blog-right-start -->
								<div class="blog-right mb-50 mb-3">
									<form action="#">
										<input type="text" placeholder="Search Here"/>
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<!-- blog-right-end -->
								<!-- blog-right-start -->
								<div class="blog-right mb-50 mb-3">
									<h3>Publication Recente</h3>
									<div class="sidebar-post">
										
										
										<?php foreach ($posts as $row) {?>
										<!-- single-post-start -->
										<div class="single-post">
											<div class="post-img">
												<a href="#"><img src="<?php echo $row['image']; ?>" alt="post" /></a>
											</div>
											<div class="post-text">
												<h4><a href="#"><?php echo $row['titre']; ?></a></h4>
												<?php 
											$timeadd=$row['date_post'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
											<span><?php echo $monthName." ".$day.", ".$year; ?></span>
												
											</div>
										</div>
										<?php } ?>
										<!-- single-post-end -->
									</div>
								</div>
								<!-- blog-right-end -->
								<!-- blog-right-start -->
								<div class="blog-right mb-50 mb-3">
									<h3>Categories</h3>
									<ul>
										<li><a href="#">General</a></li>
										<li><a href="#">Actualites</a></li>
										
										<li><a href="#">Questions</a></li>
										<li><a href="#">Feedback</a></li>
										<li><a href="#">Aide</a></li>
								
									</ul>
								</div>
								<!-- blog-right-end -->
							</div>
							<!-- blog-right-area-end -->
						</div>
					</div>
				</div>
			</div>
			<!-- shop-main-area-end -->
			<!-- newslatter-area-start -->
			<?php include 'newsletter.php'; ?>
			<!-- newslatter-area-end -->
			<!-- footer-area-start -->
			<footer>
				<div class="footer-area ptb-40">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-logo-start -->
								<div class="footer-logo mb-3">
									<a href="#"><img src="img/logo/2.png" alt="logo" /></a>
								</div>
								<!-- footer-logo-end -->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<!-- copy-right-area-start -->
								<div class="copy-right-area mb-3 text-center">
									<p>Copyright © 2018 <a href="#">Hastech</a> . All Right Reserved</p>
								</div>
								<!-- copy-right-area-end -->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-social-icon-start -->
								<div class="footer-social-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<!-- footer-social-icon-end -->
							</div>
						</div>
					</div>
				</div>
		   </footer>
			<!-- footer-area-end -->
	   </div>
	  <!-- page-wraper-start -->
	  
	  
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- owl.carousel.min.js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- jquery.nivo.slider.js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- jquery.elevateZoom-3.0.8.min.js -->
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- jquery.parallax-1.1.3.js -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.counterup.min.js -->
        <script src="js/jquery.counterup.min.js"></script>
		<!-- waypoints.min.js -->
        <script src="js/waypoints.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
