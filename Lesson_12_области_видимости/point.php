<?php
	class Point {
		public $x; // Доступты с наружи или с обьекта класса
		public $y;
		public static $num = 120; // статическая переменная
		private $local; // не доступны снаружи
	}