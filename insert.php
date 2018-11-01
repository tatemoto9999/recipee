<?php
session_start();
// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: Logout.php");
    exit;
}

//1. POSTデータ取得
$userId = $_SESSION["USER_ID"];

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$name = $_POST["name"];
$food = $_POST["food"];
$mail = $_POST["mail"];
$point = $_POST["point"];
$upfile = $_FILES["upfile"]['name']; //ここnameにする！！！
$comment = $_POST["comment"];

//2. DB接続します xxxにDB名を入力する
try {
  $pdo = new PDO('mysql:dbname=Tatemoto_19;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 ※POSTで受け取ったデータをバインドする//ここにカラム名を入力する
//与えられた変数や数値を,型を指定してパラメータに入れる
$stmt = $pdo->prepare("INSERT INTO recipee_table(id, name, food, mail, point, upfile, comment,indate)
VALUES(NULL, :a1, :a2, :a3, :a4, :a5,:a6, sysdate())");
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $food, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $point, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $upfile, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// tmpファイルをファイルへアップロード
if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) { //tmp_name:一時的にサーバー側へ保存されたファイルの名前, is_uploaded:ファイルがアップロードされたかどうか調べる関数
    if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . $_FILES["upfile"]["name"])) { //move_uploaded: アップロードファイルを移動する関数
      chmod("files/" . $_FILES["upfile"]["name"], 0644); //filesに移動される
      echo $_FILES["upfile"]["name"] . "をアップロードしました。";
    }else {
      echo "ファイルをアップロードできません。";
    }
} else {
  echo "ファイルが選択されていません。";
}

$stmt2 = $pdo->prepare("SELECT id FROM recipee_table order by id desc");
$status2 = $stmt2->execute();
$result = $stmt2->fetch();
$recipeId = $result["id"];

$stmt3 = $pdo->prepare("INSERT INTO tb_recipe_relation(recipe_relation_id, user_id, recipe_id)VALUES(NULL, :userId, :recipeId)");
$stmt3->bindValue(':userId', $userId, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt3->bindValue(':recipeId', $recipeId, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status3 = $stmt3->execute();


//４．データ登録処理後
if($status==false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:1".$error[2]);
}else if($status2==false) {
  exit("QueryError:2".$error[2]);
}else if($status3==false){
  exit("QueryError:3".$userId.$error[2]);

}else {
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: cook.php");
  exit;

}
?>