
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

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Rose</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php" >首页</a></li>
                            <li><a href="search.php">搜索</a></li>
							<li class="active"><a href="randomMatch.php">随机匹配</a></li>
							<?php
							    session_start();
							    if (isset($_SESSION['username'])){
                                    if ($_SESSION['userlevel'] == 1){
                                        echo "<li><a href=\"my.php?page=1\" id=\"login\"><u>".$_SESSION['username']."</u></a></li>";//进入个人主页
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
        <?php
        require_once 'util/DBUtil.php';
        if ($_SESSION['sex'] == null){
            header('Refresh:0,Url=login.html');
            die;
        }
        $sqlm = "select * from user_table where sex = '".$_SESSION['sex']."' and userlevel = 0";
        $dbm = new DBUtil();
        $connm = $dbm->connectDB();
        $resm = $dbm->selectDB($connm, $sqlm);
        if ($resm != null){
        ?>
		<div id="fh5co-couple" class="fh5co-section-gray">
			<div class="container">
				<div class="row row-bottom-padded-md animate-box">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="<?php
                            if ($_SESSION['sex'] == "男"){
                                echo "images/groom.jpg";
                            } else{
                                echo "images/bride.jpg";
                            }
                            ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <a href="personal.php?name=<?php echo $resm[0]['USERNAME'];?>"><h3><?php echo $resm[0]['USERNAME'];?></h3></a>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><i class="icon-heart"></i></h2></div>
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="<?php
                            if ($_SESSION['sex'] == "男"){
                                echo "images/groom.jpg";
                            } else{
                                echo "images/bride.jpg";
                            }
                            ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <a href="personal.php?name=<?php echo $resm[0]['USERNAME'];?>"><h3><?php echo $resm[1]['USERNAME'];?></h3></a>
						</div>
					</div>
				</div>
			</div>
		</div>
            <?php

        } else{
            header('Refresh:0,Url=login.html');
            die;
        }
            ?>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Rose</h2>
						</div>
						<div class="col-md-6 col-md-offset-3 text-center">
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
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
	
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
	</body>
</html>

