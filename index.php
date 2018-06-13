
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>白玫瑰</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
	
		<div class="fh5co-hero" data-section="home">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="display-t">
					<div class="display-tc">
						<div class="container">
							<div class="col-md-10 col-md-offset-1">
								<div class="animate-box">
									<h1>白玫瑰</h1>
									<h2>这里有最合适你的人</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>-->

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Rose</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php" >首页</a></li>
							<li><a href="guest.html">随机匹配</a></li>
							<?php
							    session_start();
							    if (isset($_SESSION['username'])){
                                    if ($_SESSION['userlevel'] == 1){
                                        echo "<li><a href=\"my.php\" id=\"login\"><u>".$_SESSION['username']."</u></a></li>";//进入个人主页
                                    } else {
                                        echo "<li><a href=\"myuser.php\" id=\"login\"><u>".$_SESSION['username']."</u></a></li>";//进入个人主页
                                    }
                                    echo "<li><a href=\"DAO_logout.php\" id=\"regist\">注销</a></li>";
                                } else {
							        echo "<li><a href=\"login.html\" id=\"login\">登录</a></li>";
							        echo "<li><a href=\"regist.html\" id=\"regist\">注册</a></li>";
                                }
							?>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->

		<div id="fh5co-gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h2>今日男神女神</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="gallery animate-box">
							<a class="gallery-img image-popup image-popup" href="images/gallery-1.jpg"><img src="images/gallery-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
						</div>
						<div class="gallery animate-box">
							<a class="gallery-img image-popup" href="images/gallery-7.jpg"><img src="images/gallery-7.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="gallery animate-box">
							<a class="gallery-img image-popup" href="images/gallery-6.jpg"><img src="images/gallery-6.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
						</div>
						<div class="gallery animate-box">
							<a class="gallery-img image-popup" href="images/gallery-2.jpg"><img src="images/gallery-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
						</div>
						<div class="gallery animate-box">
							<a class="gallery-img image-popup" href="images/gallery-5.jpg"><img src="images/gallery-5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="gallery animate-box">
							<a class="gallery-img image-popup" href="images/gallery-3.jpg"><img src="images/gallery-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
						</div>
						<div class="gallery animate-box">
							<a class="gallery-img image-popup" href="images/gallery-4.jpg"><img src="images/gallery-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-couple" class="fh5co-section-gray">
			<div class="container">
				<div class="row row-bottom-padded-md animate-box">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="images/groom.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<h3>王大牛</h3>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><i class="icon-heart"></i></h2></div>
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="images/bride.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<h3>李小娥</h3>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-12 text-center heading-section">
							<h2>成功匹配</h2>
							<p><strong> &mdash;on Dec 28, 2017</strong></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Rose</h2>
						</div>
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>More Templates <a href="" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
	</body>
</html>

