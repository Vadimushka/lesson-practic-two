<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Учебная практика</title>
	<link href="/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
	<div class="header">
		<a href="/"><img src="/images/max_logo.png" alt="Место для логотипа"></a>
	</div>
	<div class="sidebar1">
		<ul class="nav">
			<li><a href="/less-1" title="Практическая работа № 1">1 работа</a></li>
			<li><a href="/less-2" title="Практическая работа № 2">2 работа</a></li>
			<li><a href="/less-3" title="Практическая работа № 3">3 работа</a></li>
			<li><a href="/less-4" title="Практическая работа № 4">4 работа</a></li>
			<li><a href="/less-5" title="Практическая работа № 5">5 работа</a></li>
			<li><a href="/less-6" title="Практическая работа № 6">6 работа</a></li>
			<hr>
			<li><a href="/less-new" title="Практическая работа № 1">1 работа</a></li>
		</ul>
	</div>

	<div class="content">
		<div style="text-align: center;"><h1>Практическое занятие # 3</h1></div>
		<p><strong>Задание: </strong></p>
		<p>Первое задание в файл!</p>

		<hr>
		<p><strong>Надпись которая будет содержаться в файле text.txt</strong><br>
		Всем привет! Я нахожусь в файле text.txt!! Позаботься обо мне!!!
		</p>
		<?php
		$file = fopen("text.txt", "w");
		$str = "Всем привет! Я нахожусь в файле text.txt!! Позаботься обо мне!!!";

		if(!$file){
			echo "<p>Ошибка открытия файла.</p>";
		} else {
			fwrite($file, $str);
		}
		fclose($file);
		?>

		<p><a href="/less-3/text.txt" target="_blank">Результат</a> </p>

	</div>

	<div class="footer">
		<div style="text-align: center;"><p>2015 &copy; vadimushka_d | Вадим Дунькин | гр. 13ОИТ18к</p></div>
	</div>
</div>
</body>
</html>
