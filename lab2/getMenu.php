<?php
function getMenu($menu, $vertical = true)
{
	echo "<ul>";
	if ($vertical) {
		foreach ($menu as $key) {
			echo "<li><a href={$key['href']}>{$key['link']}</a></li>";
		}
	} else {
		foreach ($menu as $key) {
			echo "<li style = ' display: inline;'><a href=\"{$key['href']}\">{$key['link']}</a></li>";
		}
	}
	echo "</ul>";
}

$leftmenu = array(
	array("link" => "Домой", 'href' => "index.php"),
	array("link" => "О нас", 'href' => "about.php"),
	array("link" => "Контакты", 'href' => "contact.php"),
	array("link" => "Таблица умножения", 'href' => "table.php"),
	array("link" => "Калькулятор", 'href' => "calc.php"),
)
/*
	ЗАДАНИЕ 1
	- Опишите функцию getMenu()
	- Задайте для функции первый аргумент $menu, в него будет передаваться массив, содержащий структуру меню
	- Задайте для функции второй аргумент $vertical со значением по умолчанию равным true. Данный параметр указывает, каким образом будет отрисовано меню - вертикально или горизонтально
	
	ЗАДАНИЕ 2
	- Откройте файл menu.php
	- Скопируйте код, который создает массив $leftMenu и вставьте скопированный код в данный документ
	- Скопируйте код, который отрисовывает меню
	- Вставьте скопированный код в тело функции getMenu()
	- Измените код таким образом, чтобы меню отрисовывалась в зависимости от входящих параметров $menu и $vertical
	*/
?>
<!doctype html>

<head>
	<meta charset="utf-8">
	<title>Меню</title>
	<style>
		li {
			margin-right: 5px;
		}
	</style>
</head>

<body>
	<h1>Меню</h1>
	<?php
	/*
	ЗАДАНИЕ 3
	- Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
	*/
	/*
	ЗАДАНИЕ 4
	- Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным false
	*/
	getMenu($leftmenu);
	getMenu($leftmenu, false);
	?>
</body>

</html>