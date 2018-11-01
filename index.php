
<?php
session_start();
// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: Logout.php");
    exit;
}
$userID = $_SESSION["USER_ID"];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recipee &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="index.html">Recipee</a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="work.html">会社概要</a></li>
						<li><a href="services.html">サービス</a></li>
						<li><a href="pricing.html">価格</a></li>
						<li><a href="contact.html">コンタクト</a></li>
						<li class="cta"><a href="cook.html">つくる！</a></li>
						<li><a href="select.php">my page</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	<div class="container">
		
	</div>
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>美味しい料理を参考にしよう</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg">つくる！</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide2.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>つくった料理を記録しよう</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg">つくる！</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
			   <li style="background-image: url(images/slide3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>つくった料理を<br>評価してもらおう</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg">つくる！</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>企業概要</h2>
					<p>私たちは一人でも多くの人に料理を楽しいと思えるような<br>活動や取り組みを行なっています。<br>ご興味がある方は以下の問い合わせフォームよりご連絡ください。</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-laptop"></i>
						<div class="desc">
							<h3>料理データの蓄積</h3>
							<p>あなたが作った料理を投稿していただくことで、これまで作った料理を閲覧することができます。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-server"></i>
						<div class="desc">
							<h3>料理データの分析</h3>
							<p>投稿いただいた料理のデータをデータベースに保存し、あなたの健康状態から必要な栄養素を分析し、献立をリコメンドすることできます。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-money"></i>
						<div class="desc">
							<h3>料理の評価</h3>
							<p>投稿いただいた料理の情報を元に、専属の料理人または栄養士があなたにアドバイスを送ります。あなたが重視するポイントを元に、色合いや栄養バランスを考えた献立を提案いたします。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-tablet"></i>
						<div class="desc">
							<h3>健康データとの連携</h3>
							<p>あなたがもし体組成計ヘルスケアIoT製品をご利用であれば、機器データを弊社データベースに蓄積し、あなたの健康状態にあった料理をご提案することができます。
							</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-line-chart"></i>
						<div class="desc">
							<h3>レシピの閲覧</h3>
							<p>他の人が作った料理とレシピも公開しているため、他の人の料理を参考にすることで毎日の献立にも困りません。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-pie-chart"></i>
						<div class="desc">
							<h3>膨大な料理データ</h3>
							<p>世界中のお客様にご利用いただいているサービスのため、日本だけでなく世界中のレシピを検索することができます。料理人も世界中から選択可能なため、自宅にいながら現地の料理を作ることが可能になります。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-pricing-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>料金プラン</h2>
					<p>私たちは多くの方にご利用いただけるよう、<br>以下の料金プランをご用意させていただいております。<br>ライフスタイルに合わせてご自身にあったプランをご選択ください。 </p>
				</div>
			</div>
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Starter</h2>
							<div class="price"><sup class="currency">¥</sup>0<small>/month</small></div>
							<p>あなたが作った料理を投稿していただくことで、これまで作った料理を閲覧することができます。</p>
							<a href="#" class="btn btn-select-plan btn-sm">選択する</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">¥</sup>980<small>/month</small></div>
							<p>あなたが作った料理を投稿していただくことで、これまで作った料理を閲覧することができます。</p>
							<a href="#" class="btn btn-select-plan btn-sm">選択する</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
							<div class="price"><sup class="currency">¥</sup>2,980<small>/month</small></div>
							<p>あなたが作った料理を投稿していただくことで、これまで作った料理を閲覧することができます。</p>
							<a href="#" class="btn btn-select-plan btn-sm">選択する</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Unlimited</h2>
							<div class="price"><sup class="currency">¥</sup>5,980<small>/month</small></div>
							<p>あなたが作った料理を投稿していただくことで、これまで作った料理を閲覧することができます。</p>
							<a href="#" class="btn btn-select-plan btn-sm">選択する</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>是非あなたのレシピを投稿してみませんか？</h3>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow">さっそく始める！ <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

	
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>会社概要</h3>
				<p>あなたが作った料理を投稿していただくことで、これまで作った料理を閲覧することができます。</p>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">Join Us <i class="icon-arrow-right"></i></a></p>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>サービス概要</h3>
				<ul class="float">
					<li><a href="#">料理・健康データの蓄積</a></li>
					<li><a href="#">データの分析</a></li>
					<li><a href="#">調理器具販売</a></li>
					<li><a href="#"></a>人材派遣</li>
				</ul>
				<ul class="float">
					<li><a href="#">XXXXXXXXXX</a></li>
					<li><a href="#">XXXXXXXXXX</a></li>
					<li><a href="#">XXXXXXXXXX &amp; XXXXXXXXXX</a></li>
					<li><a href="#">XXXXXXXXXX</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 更新日：2018-10 All Rights Reserved. <span>Designed  <i class="icon-heart"></i> by <a href="https://www.facebook.com/stk.ttmt" target="_blank">stk</a></span></p>	
			</div>
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

