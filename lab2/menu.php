<?php
	/*
	ЗАДАЧА
	Отрисовать навигационное меню на странице,
	используя массив в качестве структуры меню
	
	ЗАДАНИЕ 1
	- Создайте массив $leftMenu элементами которого будут являться ассоциативные массивы с ключами 'link' и 'href'
	- Заполните массив соблюдая следующие условия:
		- Значением элемента с ключём 'link' является один из пунктов меню: 'Домой', 'О нас', 'Контакты', 'Таблица умножения', 'Калькулятор'
		- Значением элемента с ключём 'href' будет имя файла, на который указывает ссылка: index.php, about.php, contact.php, table.php, calc.php
	*/
	
	
	$leftmenu = array(
	array("link"=>"Домой",'href'=>"index.php"),
	array("link"=>"О нас",'href'=>"about.php"),
	array("link"=>"Контакты",'href'=>"contact.php"),
	array("link"=>"Таблица умножения",'href'=>"table.php"),
	array("link"=>"Калькулятор",'href'=>"calc.php"),
	)
	?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Меню</title>
</head>
<body>
	<h1>Меню</h1>
	<ul>
		<?php
	/*
	ЗАДАНИЕ 2
	- Отрисуйте вертикальное меню с помощью цикла foreach, 
	  передав ему в качестве аргумента массив $leftMenu.
	  В итоге должен получиться следующий список: 
	   <ul>
	      <li><a href='index.php'>Домой</a></li>
	      <li><a href='about.php'>О нас</a></li>
	      <li><a href='contact.php'>Контакты</a></li>
	      <li><a href='table.php'>Таблица умножения</a></li>
	      <li><a href='calc.php'>Калькулятор</a></li>
	    </ul>
	*/
	foreach($leftmenu as $key){
		echo "<li><a href='{$key['href']}'>{$key['link']}</a></li>";
		}
	
	

	?>
	</ul>
	
</body>
</html>
