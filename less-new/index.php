<!doctype html>
<html>
<head>
	<meta charset="windows-1251">
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
		<div style="text-align: center;"><h1>Практическое занятие # 1</h1></div>
		<p><strong>Задание: </strong></p>
		<p>В форму вводится текст. Далее пользователь может выбрать на выбор:<br>
			Преобразовать в нижний регистр<br>
			Преобразовать в верхний регистр<br>
			Преобразовать в обычный текст</p>
		<hr>

		<form method="post">
			<p>Введите слово или предложение: <label><input type="text" name="text"></label></p>
			<p><label><input type="radio" name="type" value="verh"></label>Верхний регистр<br>
				<label><input type="radio" name="type" value="niz"></label>Нижний регистр<br>
				<label><input type="radio" name="type" value="ob"></label>Обычный регистр</p>
			<p><input type="submit" name="button"></p>
		</form>

		<?php
		setlocale(LC_ALL, '');
		if (isset($_POST['button'])) {
			$text = $_POST['text'];
			$type = $_POST['type'];

			echo "<hr>";
			switch($type){
				case 'verh':
					echo "<p>".strtoupper($text)."</p>";
					break;
				case 'niz':
					echo "<p>".strtolower($text)."</p>";
					break;
				case 'ob':
					echo "<p>".ucfirst($text)."</p>";
					break;
			}

			echo "<p><a href='/less-new'>Убрать все</a></p>";
		}
		?>

	</div>

	<div class="footer">
		<div style="text-align: center;"><p>2015 &copy; vadimushka_d | Вадим Дунькин | гр. 13ОИТ18к</p></div>
	</div>
</div>
</body>
</html>
