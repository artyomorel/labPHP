<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Цикл while</title>
</head>
<body>
	<h1>Цикл while</h1>
	<?php
	

$text="Это просто текст";
$var = "";
$str = iconv("UTF-8", "windows-1251", $text);

foreach (str_split($str) as $index => $value)

{

$var .= iconv("windows-1251","UTF-8", $value)."<br>\n";
echo iconv("windows-1251","UTF-8", $value),"</br>";

}


	
	/*
	ЗАДАНИЕ
	- Создайте переменную $var и присвойте ей строковое значение HELLO
	- Используя цикл while выведите значение переменной $var в столбик так, 
	  чтобы на выходе в браузере получилось:
	H
	E
	L
	L
	O
	*/
	?>
</body>
</html>

