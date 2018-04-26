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
		<div style="text-align: center;"><h1>Практическое занятие # 2</h1></div>
		<p><strong>Задание: </strong></p>
		<p>Существует матрица, заполненная 0, по диагоналям переписать на 1.<br>
			Сперва показывается исходная матрица потом измененная.</p>

		<?php
		echo "<hr>";
		$rows = 8;
		$cols = 8;
		$arr_int = array();

		for($x = 0; $x < $rows; $x++){
			$arr_int[$x] = array_fill(0,$cols,0);
		}

		echo "<div style='padding-left: 15px'>";
		echo "<p>Матрица:</p>";
		echo "<table border='1'>";
		foreach($arr_int as $rInt){
			echo "<tr>";
			foreach ($rInt as $value){
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		for($x = 0;$x < count($arr_int);$x++){
			$arr_int[$x][$x] = 1;
		}

		$y = count($arr_int) - 1;

		for($x = 0;$x < count($arr_int);$x++){
			$arr_int[$x][$y] = 1;
			$y--;
		}

		echo "<p>Полученный массив:</p>";
		echo "<table border='1'>";
		foreach($arr_int as $rInt){
			echo "<tr>";
			foreach ($rInt as $value){
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</div>";

		echo "<p><a href='/less-2'>Убрать все</a></p>";

		?>
	</div>

	<div class="footer">
		<div style="text-align: center;"><p>2015 &copy; vadimushka_d | Вадим Дунькин | гр. 13ОИТ18к</p></div>
	</div>
</div>
</body>
</html>
