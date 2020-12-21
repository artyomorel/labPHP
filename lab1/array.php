<?php


$bmw = array(
	"model" => "X5",
	"speed" => 120,
	"doors" => 5,
	"year" => "2006");
$toyota = array(
	"model" => "Carina",
	"speed" => 130,
	"doors" => 4,
	"year" => "2007");

$opel = array(
	"model" => "Corsa",
	"speed" => 140,
	"doors" => 5,
	"year" => "2007");
 /*
ЗАДАНИЕ 1
- Создайте массив $bmw с ячейками:
	"model"
	"speed, km/h"
	"doors"
	"year"
- Заполните ячейки значениями: "X5", 120, 5, "2006"	
- Создайте массивы $toyota и $opel аналогичные массиву $bmw.
- Заполните массив $toyota значениями: "Carina", 130, 4, "2007"
- Заполните массив $opel значениями: "Corsa", 140, 5, "2007"	*/	
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Массивы</title>
	<link rel="stylesheet" type="text/css" href="css.css"></link> 
</head>
<body>
	<h1>Массивы</h1>
	<?php
	echo "<p>bmw-{$bmw['model']}-$bmw[speed]-$bmw[doors]-$bmw[year]</p>";
	echo "<p>toyota-$toyota[model]-$toyota[speed]-$toyota[doors]-$toyota[year]</p>";
	echo "<p>opel-$opel[model]-$opel[speed]-$opel[doors]-$opel[year]</p>";
	
	
	
	/*echo "<p>bmw", " - " , $bmw["model"]," - ",$bmw["speed,km/h"]," - ",$bmw["doors"]," - ",$bmw["year"],"</p>";
	echo "<p>toyota", " - " , $toyota["model"]," - ",$toyota["speed,km/h"]," - ",$toyota["doors"]," - ",$toyota["year"],"</p>";
	echo "<p>opel", " - " , $opel["model"]," - ",$opel["speed,km/h"]," - ",$opel["doors"]," - ",$opel["year"],"</p>";
	
	ЗАДАНИЕ 2
	- С помощью подстановки в строку выведите значения всех трёх массивов в виде: name - model - speed - doors -year,  например: bmw - x5 - 120 - 5 - 2006
	*/
	?>
</body>
</html>

