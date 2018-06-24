
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rose - my</title>
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
                            <li><a href="randomMatch.php">随机匹配</a></li>
                            <?php
                            session_start();
                            if (isset($_SESSION['username'])){
                                if ($_SESSION['userlevel'] == 1){
                                    echo "<li  class=\"active\"><a href=\"my.php?page=1\" id=\"login\"><u>".$_SESSION['username']."</u></a></li>";//进入个人主页
                                } else {
                                    echo "<li  class=\"active\"><a href=\"myuser.php?page=1\" id=\"login\"><u>".$_SESSION['username']."</u></a></li>";//进入个人主页
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
		
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h2>成功配对的Ta，电话了解一下？</h2>
					</div>
				</div>
			</div>




            <div class="container">
                <div class="row row-bottom-padded-md">
                    <!-- 每个申请start -->
                    <?php
                    require_once 'util/DBUtil.php';
                    $sql = "select distinct USERNAMETO from match where usernamefrom = '".$_SESSION['username']."'";

                    $db = new DBUtil();
                    $conn = $db->connectDB();
                    $resl = $db->selectDB($conn, $sql);
                    $time = 0;

                    if ($resl != null) {
                        foreach ($resl as $name) {
                            $sql1 = "select * from USER_TABLE where USERNAME = '". $name[0] ."'";
                            $time++;
                            $db1 = new DBUtil();
                            $conn1 = $db1->connectDB();
                            $res = $db->selectDB($conn1, $sql1);
                            foreach ($res as $user) {
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="fh5co-blog animate-box">
                                        <a href="personal.php?name=<?php echo $user['USERNAME']; ?>"><img
                                                    class="img-responsive" src="<?php
                                            if ($user['SEX'] == "男") {
                                                echo "images/groom-men-3.jpg";
                                            } else {
                                                echo "images/bridesmaid-2.jpg";
                                            }
                                            ?>" alt=""></a>
                                        <div class="blog-text">
                                            <div class="prod-title">
                                                <h3><label>姓名：</label><a href="#"><?php echo $user['USERNAME']; ?></a></h3>
                                                <label>性别：</label><span><?php echo $user['SEX']; ?></span><br>
                                                <label>年龄：</label><span><?php echo $user['AGE']; ?></span><br>
                                                <label>籍贯：</label><span><?php echo $user['HOME']; ?></span><br>
                                                <label>兴趣爱好：</label><span><?php echo $user['HOBBY']; ?></span><br>
                                                <label>喜欢的类型：</label><span><?php echo $user['PREFERENCE']; ?></span><br>
                                                <label>手机：</label><span><?php echo $user['PHONE']; ?></span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    } else {
                        ?>
                        <center><h2>还没有人与你成功配对</h2></center>
                        <center><h2>快去<a href=""><strong><u>随机匹配</u></strong></a>看看吧</h2></center>

                    <?php
                    }
                ?>
                    <!-- 每个申请end -->
                </div>
            </div>
		</div>
		<!-- fh5co-blog-section -->

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
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
	</body>
</html>

