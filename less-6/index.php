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
		<div style="text-align: center;"><h1>Практическое занятие # 6</h1></div>
		<p><strong>Задание: </strong></p>
		<p>Сделать файл, считывая который в массиве появлялась буква.<br>
			Вводится строка, со строки берутся символы и в зависимости от символов в массив загружаются.<br>
			Вводиться фраза, эта фраза выводиться в режиме табло.<br>
			В файле есть буквы, вводиться фраза и выводится с помощью кодированных букв из файла.</p>

		<hr>
		<p>Показано слово преобразованное из обычного:</p>
		<?php
		include "symbols.php";

		$text = "с новым годом!";

		$str[] = "с";
		$str[] = " ";
		$str[] = "н";
		$str[] = "о";
		$str[] = "в";
		$str[] = "ы";
		$str[] = "м";
		$str[] = " ";
		$str[] = "г";
		$str[] = "о";
		$str[] = "д";
		$str[] = "о";
		$str[] = "м";
		$str[] = "!";

		echo "<p>" .join($str) . "</p>";

		echo "<div style='padding-left: 15px'>";
		echo "<table><tr>";

		for($i = 0; $i < count($str); $i++){
			echo "<td>";
			foreach(symbols_letter($str[$i]) as $letter){
				echo $letter . "<br>";
			}
			echo "</td>";
		}
		echo "</tr></table>";
		echo "</div>";
		?>


	</div>

	<div class="footer">
		<div style="text-align: center;"><p>2015 &copy; vadimushka_d | Вадим Дунькин | гр. 13ОИТ18к</p></div>
	</div>
</div>
</body>
</html>
