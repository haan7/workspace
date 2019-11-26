<?php
require_once("class/IntelligentBuilding.php");
$midTown = new IntelligentBuilding("東京ミッドタウン",248);
echo "<pre>";
var_dump($midTown);
echo "</pre>";
exit(0);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>IntelligentBuildingクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>IntelligentBuildingクラスを利用する</h1>
	<dl>
		<dt><?=$midTown->getname()?></dt>
		<dd>
		    <?$midTown-->getProfile()?><br />
			<?$midTown->isAutoLocked()?><br />
			<?$midTown->accesswifi()?>
		</dd>
	</dl>
	<p><a href="index.html">インデックスに戻る</a></p>
</body>

</html>