<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>	

<body>
	<div id="wrapper">
		<header id="head">
			<div id="box">
				<h1>ScoreCalc</h1>
			</div>
		</header>

		<div id="main">
		<h2>期末テストの合計点を計算します</h2>
			<p>フォームに各教科の点数をに入力してください</p>
			<hr>
			<form method="post" action="result/index.php" class=”form-inline”>
			<?php 
			$subjects = ["国語","数学","社会","英語","理科","美術","音楽","技術家庭","保健体育"];
			$sub = ["ja","ma","so","en","sc","art","mu","th","pe"];
			for ($i = 0; $i <= 9; $i++) {
				echo "<label>".$subjects[$i]."</label>";
				echo '<input type="number" class="form-control" max="100" min="0" name="'.$sub[$i].'">';
			}
			?>
			<input type="submit" value="送信">
			</form>		
		</div>		

		<footer>
			<div id="box2">
				<p>© 2020 Tatsuki Nakamori</p>
			</div>
		</footer>
	</div>	
</body>	
</html>