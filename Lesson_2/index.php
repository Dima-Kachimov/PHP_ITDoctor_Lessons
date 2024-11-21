<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= 'Lesson 2' ?></title>
</head>
<body>
<h1>Урок 2</h1>
<br>
<?php
	echo 'Текущая дата - ';
	echo date(DATE_RSS);
?>
<br>
<?php
	echo 9 + 3 - 4;
	echo 'text';
?>
<br>
<?php
	$rand = mt_rand(0, 1);
	if ($rand) {
		?>
		<div style="color: blue">Синий текст <?= $rand ?> </div>
		<?php
	} else {
		?>
		<div style="color: red">Крассный текст <?= $rand ?> </div>
		<?php
	}
?>
</body>
</html>