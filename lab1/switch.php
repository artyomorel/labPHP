<?php
$day = 8;
/*
ЗАДАНИЕ 1
- Создайте переменную $day и присвойте ей произвольное числовое значение
*/
?>
<!doctype html>

<head>
	<meta charset="utf-8">
	
	<title>Конструкция switch</title>
	<link rel="stylesheet" type="text/css" href="css.css"></link>
</head>
<body>
	<h1>Конструкция switch</h1>
	<?php
	switch($day){
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "<p>Это рабочий день</p>";
			break;
		case 6:
		case 7:
			echo "<p>Это выходной день</p>";
			break;
		default:
			echo "<p>Неизвестный день</p>";
		}
	/*
	ЗАДАНИЕ 2
	-  С помощью конструкции switch выведите фразу "Это рабочий день", если значение переменной $day попадает в диапазон чисел от 1 до 5(включительно) 
	- Выведите фразу "Это выходной день", если значение переменной $day равно числам 6 или 7
	- Выведите фразу "Неизвестный день", если значение переменной $day не попадает в диапазон чисел от 1 до 7(включительно) 
	*/
	?>
</body>
</html>
