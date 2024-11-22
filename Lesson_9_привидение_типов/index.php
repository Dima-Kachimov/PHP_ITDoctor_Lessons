<?php
/*
 * '' - fasle
 * 0 - false
 * false - false
 * {} - false
 * null - false
*/

// явное привидение типов

	$var = 1;
	$res = (string)$var; //  строке
	$res = (bool)$var; // логическому
	$res = (float)$var; // вещественному
	$res = (double)$var; // вещественному
	$res = (array)$var; // масиву
	$res = (object)$var; // обьекту
	$res = (int)$var; // числу
	
	$num = 22;
	$f =(float)($num / 2) - (int)($num / 2);// проверка на четное чило
	if($f){
		echo "Чсло нечетное";
	} else {
		echo "Чсло четное";
	}
	