<?php
session_start();
// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: Logout.php");
    exit;
}
$userId = $_SESSION["USER_ID"];
//データを受け取る
$id = $_GET["id"]; //idデータを元に画像を表示させるようにセット！

//2. DB接続します xxxにDB名を入力する
try {
  $pdo = new PDO('mysql:dbname=Tatemoto_19;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//受け取れてるかチェック、こういうの大事
//echo $id;

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT rec.* 
FROM recipee_table as rec
inner join tb_recipe_relation as rel
on (rec.id = rel.recipe_id and rel.user_id = :userId)
where id = :id"); //
$stmt->bindParam(":id", $id);
$stmt->bindValue(":userId", $userId, PDO::PARAM_INT);
$status = $stmt->execute();

$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    $result = $stmt->fetch();
    $view .= "<p>";  
    $view .= $result["food"];
    $view .= "</p>";
	$view .= "<img src='./files/".$result["upfile"]."' class = 'food_image' >";
	$view .= "<p>";  
    $view .= $result["comment"];
    $view .= "</p>";

    //.= 変数の前に文字が入っていた場合。データが上書きせずに一覧で表示される
    
}
  

// //一覧表示
// $images = array ();
// if ($handle = opendir ( 'files/' )) {
//     while ( $entry = readdir ( $handle ) ) {
//         if ($entry != "." && $entry != "..") {
//             $images [] = $entry;
//         }
//     }
//     closedir ( $handle );
// }

// if (count ( $images ) > 0) {
//     foreach ( $images as $value ) {
//         echo '<img src="files/' . $value . '">';
//     }
// } else {
//     echo '<p class="textstyle">画像はまだありません。</p>';
// }



// //リコメンド表示
// $images = array ();

// // albumフォルダをオープンにする
// // $handleにディレクトリハンドルが入っている
// // opendir(フォルダ名)⇒戻り値ディレクトリハンドル
// if ($handle = opendir ( 'files/' )) {
// // readdir(ディレクトリハンドル)⇒指定したディレクトリのファイル一覧を取得する
// // ファイル名をどんどん取得する
//     while ( $entry = readdir ( $handle ) ) {
//         // 現在のディレクトリの.or..を除いた全てのファイル名リストを
//         // $imagesに格納している
//         if ($entry != "." && $entry != "..") {
// // $entry⇒readdirで取得したファイル名が沢山格納されている。
// // それを$images配列に格納。
//             $images [] = $entry;
//         }
//     }
//     // ディレクトリハンドルをクローズする
//     closedir ( $handle );
// }

// if (count ( $images ) > 0) {
//     // $valueという変数に入れる
//     foreach ( $images as $value ) {
//         echo '<img src="files/' . $value . '">';
//     }
// // もしファイル名が$imagesに入ってなかったら
// } else {
//     echo '<p class="textstyle">画像はまだありません。</p>';
// }


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
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Form style  -->
	<link rel="stylesheet" href="css/form.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    </head>
    
<body>
	<!-- ヘッダー -->
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
<!-- ヘッダー	 -->


<!-- Main[Start] $view-->
    <div class="container jumbotron">
        <div class="container_food">
        <?=$view?>    
        </div>
    </div>
<!-- Main[end] $view-->

    	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
</body>
</html>