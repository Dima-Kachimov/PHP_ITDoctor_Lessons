<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Урок </title>
</head>
<body>
	<?php
		
		// Целые числа в разной системе исчесления
		$num = 12; // 10ти
		$num = -12;
		$num = 012; // 8ми
		$num = 0xA; // 16ти
		echo $num + 0xF;
		
		// Вещественные числа
		$var = 1.64326; // Вещественное число
		$var = 1.64326e-3; // экспоненциальные числа
		echo $var;
	?>
</body>
</html>