<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Урок 11</title>
</head>
<body>

<?php
	require 'point.php';
	$point1 = new Point;
	$point1->x = 13;
	$point1->y = 2;
	
	echo $point1->x;
	echo '<br>';
	echo $point1->y;
	
	echo '<br>';
	
	$point2 = new Point;
	$point2->x = 10;
	$point2->y = 234;
	
	echo $point2->x;
	echo '<br>';
	echo $point2->y;
	
	unset($point2); // удаление обьекта
?>

</body>
</html>