<?php
const orel = 1566;
/*
ЗАДАНИЕ 1
- Создайте константу и присвойте ей значение
*/
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Константы</title>
	<link rel="stylesheet" type="text/css" href="css.css"></link>
</head>
<body>
	<h1>Константы</h1>
	<?php
	if(defined("orel")) {
		echo "<p>Существует</p>";
		echo orel;
		}
	else{
		echo "<p>Не существует</p>";
		}

	//orel = 1600
	/*
	ЗАДАНИЕ 2
	-  Проверьте, существует ли константа, которую Вы хотите использовать
	- Выведите значение созданной константы
	- Попытайтесь изменить значение созданной константы. 
	*/
	
	?>
</body>
</html>
