<?php
	$bool = true;
	$bool = false;
	$year = 2024;
	
	$str = "Hello 'World' - $year"; // Выводиться значение переменной
	$str = "Hello 'World' - \$year"; // Екранирование название переменной
	$str = "Hello 'World' - \"$year\""; // Екранирование ковычек
	$str = "Hello 'World' - \"{$year}3\""; // Если нужно отделить название переменной
	$str = `ls`; // Команды системы (Запишеться результат)
	
	echo $str;