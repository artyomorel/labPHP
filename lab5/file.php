<?php
/*
ЗАДАНИЕ 1
- Установите константу для хранения имени файла
- Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
- В случае, если форма была отправлена, отфильтруйте полученные значения 
  с помощью функций trim(), htmlspecialchars()
- Сформируйте строку для записи с файл
- Откройте соединение с файлом и запишите в него сформированную строку
- Используя функцию header() выполните перезапрос текущей страницы 
  (чтобы избавиться от данных, отправленных методом POST)
*/
const G="guestBook.txt";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$fname=trim(htmlspecialchars($_POST['fname']));
	$lname=trim(htmlspecialchars($_POST['lname']));

	if($fname!=""||$lname!=""){
		$owf=fopen(G,"a+");
		$str="Имя: $fname Фамилия: $lname\n";
		fwrite($owf,$str);
		fclose($owf);
	}
	header('location: /lab5/file.php');
    exit();
	//header("Location: http://www.center.ogu/~fm160478/PHP/Lab5/file1.php");
}
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Работа с файлами</title>
</head>
<body>

<h1>Заполните форму</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Имя: <input type="text" name="fname"><br>
Фамилия: <input type="text" name="lname"><br>

<br>

<input type="submit" value="Отправить!">

</form>

<?php
/*
ЗАДАНИЕ 2
- Проверьте, существует ли файл с информацией о пользователях
- Если файл существует, получите все содержимое файла в виде массива строк 
  с помощью функции file()
- В цикле выведите все строки данного файла с порядковым номером строки
- После этого выведите размер файла в байтах.
*/
if(file_exists(G)){
	$strmass=file(G);
	foreach ($strmass as $key => $val){
		$a=$key+1;
		echo "$a $val<br>";
	}
	echo "Pазмер файла в байтах: ".filesize(G);
}
?>

</body>
</html>