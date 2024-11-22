<?php
	$user = "";
	
	echo gettype($user);
	echo is_int();
	
	
	if(isset($user)){
		echo "Переменная существует <br>";
	} else {
		echo "Переменная не существует <br>";
	}
	
	if(empty($user)){
		echo "Строка пустая <br>";
		echo $user;
	} else {
		echo "В строке что то есть <br>";
		echo $user;
		
	}