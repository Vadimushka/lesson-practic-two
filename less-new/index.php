<!doctype html>
<html>
<head>
	<meta charset="windows-1251">
	<title>������� ��������</title>
	<link href="/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
	<div class="header">
		<a href="/"><img src="/images/max_logo.png" alt="����� ��� ��������"></a>
	</div>
	<div class="sidebar1">
		<ul class="nav">
			<li><a href="/less-1" title="������������ ������ � 1">1 ������</a></li>
			<li><a href="/less-2" title="������������ ������ � 2">2 ������</a></li>
			<li><a href="/less-3" title="������������ ������ � 3">3 ������</a></li>
			<li><a href="/less-4" title="������������ ������ � 4">4 ������</a></li>
			<li><a href="/less-5" title="������������ ������ � 5">5 ������</a></li>
			<li><a href="/less-6" title="������������ ������ � 6">6 ������</a></li>
			<hr>
			<li><a href="/less-new" title="������������ ������ � 1">1 ������</a></li>
		</ul>
	</div>

	<div class="content">
		<div style="text-align: center;"><h1>������������ ������� # 1</h1></div>
		<p><strong>�������: </strong></p>
		<p>� ����� �������� �����. ����� ������������ ����� ������� �� �����:<br>
			������������� � ������ �������<br>
			������������� � ������� �������<br>
			������������� � ������� �����</p>
		<hr>

		<form method="post">
			<p>������� ����� ��� �����������: <label><input type="text" name="text"></label></p>
			<p><label><input type="radio" name="type" value="verh"></label>������� �������<br>
				<label><input type="radio" name="type" value="niz"></label>������ �������<br>
				<label><input type="radio" name="type" value="ob"></label>������� �������</p>
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

			echo "<p><a href='/less-new'>������ ���</a></p>";
		}
		?>

	</div>

	<div class="footer">
		<div style="text-align: center;"><p>2015 &copy; vadimushka_d | ����� ������� | ��. 13���18�</p></div>
	</div>
</div>
</body>
</html>
