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
		<div style="text-align: center;"><h1>Практическое занятие # 4</h1></div>
		<p><strong>Задание: </strong></p>
		<p>Сначала сделать в одномерном массиве, затем в двумерном. <br>
			Сдвинуть элементы n-мерного массива влево и вправо.</p>
		<hr>	
		<?php
		
		$arr_1 = array();
		$arr_2 = array();
			
		for($x = 0; $x < 8; $x++){	
			$arr_1[$x] = rand(-100, 100);
		}
		
		for($x = 0; $x < 8; $x++){
			for($y = 0; $y < 8; $y++){
				$arr_2[$x][$y] = rand(-100, 100);
			}
		}

		echo "<div style='padding-left: 15px'>";
		echo "<table border='1'>";
		echo "<thead>Исходный 1-мерный массив:</thead>";
		echo "<tr>";
		foreach($arr_1 as $value){
			echo "<td>{$value}</td>";
		}
		echo "</tr>";
		echo "</table>";

		array_unshift($arr_1, array_pop($arr_1));//сдвиг на 1 вправо
		echo "<table border='1'>";
		echo "<thead>Массив со сдвигом вправо:</thead>";
		echo "<tr>";
		foreach($arr_1 as $value){
			echo "<td>{$value}</td>";
		}
		echo "</tr>";
		echo "</table>";

		array_push($arr_1, array_shift($arr_1),array_shift($arr_1));//сдвиг на 1 влево
		echo "<table border='1'>";
		echo "<thead>Массив со сдвигом влево:</thead>";
		echo "<tr>";
		foreach($arr_1 as $value){
			echo "<td>{$value}</td>";
		}
		echo "</tr>";
		echo "</table>";
		echo "</div>";

		echo "<div style='padding-left: 15px'>";
		echo "<table border='1'>";
		echo "<thead>Исходный 2-мерный массив:</thead>";
		foreach($arr_2 as $arr_two){
			echo "<tr>";
			foreach ($arr_two as $value){
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		echo "<table border='1'>";
		echo "<thead>Массив со сдвигом 1 вправо:</thead>";
		foreach($arr_2 as $arr_two){
			echo "<tr>";
			array_unshift($arr_two, array_pop($arr_two));//сдвиг на 1 вправо
			foreach ($arr_two as $value){
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		echo "<table border='1'>";
		echo "<thead>Массив со сдвигом 2 влево:</thead>";
		foreach($arr_2 as $arr_two){
			echo "<tr>";
			array_push($arr_two, array_shift($arr_two), array_shift($arr_two));//сдвиг на 1 влево
			foreach ($arr_two as $value){
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
