<?php
//セッションを開始
session_start();
//リクエストパラメータを取得
$id = " ";//宣言して、ifの外にも使えるようにする
if(isset($_REQUEST["id"])){
    $id=$_REQUEST["id"];
}
$password = "";
if(isset($_REQUEST["password"])){
    $id=$_REQUEST["password"];
}
//認証修理
$isLogined = false;
if (($id === $id_ok) and ($password === $password_ok)){
    $_SESSION["id"]=$id;
    $isLogined=true;
}

print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ccmc-04</title>
<link rel="stylesheet" href="../../assets/css/style.css" />
<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
<h1>簡単なユーザ認証</h1>
<p>ようこそ、usr01さん</p>
<p><a href="logout.html">ログアウトする</a></p>
<?php if($isLogined===true){ ?>
<p>ようこそ<?= $id ?>さん</p>
<p><a href="logout.html">ログアウトする</a></p>
<?php } else { ?>
<p>ログインに失敗しました</p>
<p><a href="entry.html">ログインページへ</a></p>
<?php }?>
</body>
</html>