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
		<div style="text-align: center;"><h1>Практическое занятие # 5</h1></div>
		<p><strong>Задание: </strong></p>
		<p>Два массива(многомерных):<br>
			Получить третий массив: первая половина из второго, вторая из первого, в одном цикле.</p>
		<hr>
		<?php
		$arr_one = array();
		$arr_two = array();
		$arr_third = array();

		for($x = 0; $x < 8; $x++){
			for($y = 0; $y < 8; $y++){
				$arr_one[$x][$y] = rand(0, 50);
				$arr_two[$x][$y] = rand(-50, 0);
			}
		}

		echo "<div style='padding-left: 15px'>";
		echo "<table>";
		echo "<tr>";
		echo "<td>";
		echo "<p>1 двумерный массив:</p>";
		echo "<table border='1'>";
		foreach($arr_one as $arr_1){
			echo "<tr>";
			foreach ($arr_1 as $value){
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</td>";
		echo "<td width='4'>";
		echo "</td>";
		echo "<td>";
		echo "<p>2 двумерный массив:</p>";
		echo "<table border='1'>";
		foreach($arr_two as $arr_2){
			echo "<tr>";
			foreach ($arr_2 as $value){
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";

		for($x = 0; $x < 8; $x++){
			if($x < 4){
				$arr_third[] = array_shift($arr_two);
			} else {
				$arr_third[] = array_shift($arr_one);
			}
		}

		echo "<p>Новый 3 двумерный массив:</p>";
		echo "<table border='1'>";
		foreach($arr_third as $arr_3){
			echo "<tr>";
			foreach ($arr_3 as $value){
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</div>";

		?>
	</div>

	<div class="footer">
		<div style="text-align: center;"><p>2015 &copy; vadimushka_d | Вадим Дунькин | гр. 13ОИТ18к</p></div>
	</div>
</div>
</body>
</html>
