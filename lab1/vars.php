<?php

$name = "Артем";
$age = 20;
/*
ЗАДАНИЕ 1
- Создайте переменную $name и присвойте ей значение содержащее Ваше имя, например "Иван"(обязательно в кавычках!)
- Создайте переменную $age и присвойте ей значение содержащее Ваш возраст, например 20
*/

?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Переменные и вывод</title>
	<link rel="stylesheet" type="text/css" href="css.css"></link>
</head>
<body>
	<h1>Переменные и вывод</h1>
	<?php
	
	echo("<h3>Меня зовут: $name</h3>");
	echo("<h3>Мне $age лет </h3>");
	
	echo "<p>" , gettype($name) , "</p>";
	echo "<p>" , gettype($age) , "</p>";
	
	unset($age);
	/*
	ЗАДАНИЕ 2
	- Выведите с помощью echo(или print) фразу "Меня зовут: ваше_имя", например: "Меня зовут: Иван"
	- Выведите фразу "Мне ваш_возраст лет", например: "Мне 20 лет"
	- Получите информацию о типе переменных $name и $age
	- Удалите переменную $age
	- Измените код так, чтобы каждая фраза начиналась с новой строки
	- Измените код так, чтобы каждая фраза начиналась с новой строки в исходном HTML-коде
	*/
	?>
</body>
</html>
