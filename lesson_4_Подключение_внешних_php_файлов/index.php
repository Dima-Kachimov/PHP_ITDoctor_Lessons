<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= "Урок 4" ?></title>
</head>
<body>
<?php
	echo "Глвный скрипт <br>";
	include 'second.php'; // Первый способ подключени (Если его нет то буде просто предупреждение)
	echo "Глвный скрипт <br>";
	require 'about.php'; // Второй способ подключени (Если его нет то буде просто ошибка)
?>
</body>
</html>