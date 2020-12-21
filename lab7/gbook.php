<!doctype html>
<html lang="ru">
<head >
	<meta charset="utf-8">
	<title>Гостевая книга</title>
	<style>
	#right { text-align: right; }
	</style>
</head>
<body>


<?php
/* ЗАДАНИЕ 1
- Подключитесь к серверу mySQL
- Установите кодировку по умолчанию для текущего соединения
- Выберите активную Базу Данных 'gbook'
- Проверьте, была ли корректным образом отправлена форма
- Если она была отправлена: отфильтруйте полученные данные 
  с помощью функций trim(), htmlspecialchars() и mysql_real_escape_string(),
  сформируйте SQL-оператор на вставку данных в таблицу msgs и выполните его с помощью функции mysql_query(). 
  После этого с помощью функции header() выполните перезапрос страницы, 
  чтобы избавиться от информации, переданной через форму
*/
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'f0489291_root');
define('DB_PASSWORD', 'qwerty');
define('DB_NAME', 'f0489291_MyDB');

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link,'utf8');

mysqli_select_db($link,DB_NAME) or die(mysqli_error($link));

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = isset($_POST['name']) ? trim(htmlspecialchars(mysqli_real_escape_string($link,$_POST['name']))) : '';
	$email = isset($_POST['email']) ? trim(htmlspecialchars(mysqli_real_escape_string($link,$_POST['email']))) : '';
	$msg = isset($_POST['msg']) ? trim(htmlspecialchars(mysqli_real_escape_string($link,$_POST['msg']))) : '';
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$sql = "
	INSERT INTO msgs ( id, name, email, msg)
	VALUES (0, '$name', '$email', '$msg');";
	mysqli_query($link,$sql) or die(mysqli_error($link));
    }else{
	echo "email адрес указан неверно!";
	}
    header('location: /lab7/gbook.php');
    exit();

}



	

	
	
/*
ЗАДАНИЕ 3
- Проверьте, был ли запрос методом GET на удаление записи
- Если он был: отфильтруйте полученные данные,
  сформируйте SQL-оператор на удаление записи и выполните его.
  После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной методом GET
*/
if($_SERVER['REQUEST_METHOD'] == 'GET'){
$ids=isset($_GET['del']) ? (int)trim(htmlspecialchars(mysqli_real_escape_string($link,$_GET['del']))) : '';
if($ids!=''){
$sql3="DELETE `msgs`
       FROM `msgs`
       WHERE `msgs`.`id`=$ids";
mysqli_query($link,$sql3) or die(mysqli_error($link));
}
}
?>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br>
<input type="text" name="name"><br>
Ваш E-mail:<br>
<input type="text" name="email"><br>
Сообщение:<br>
<textarea name="msg" cols="50" rows="5"></textarea><br>
<br>
<input type="submit" value="Добавить!">

</form>

<?php
$sql2="SELECT id, name, email, msg FROM msgs ORDER BY id DESC;";
$res=mysqli_query($link,$sql2) or die(mysqli_error($link));
mysqli_close($link);
/*
ЗАДАНИЕ 2
- Сформируйте SQL-оператор на выборку всех данных из таблицы
  msgs в обратном порядке и выполните его. Результат выборки
  сохраните в переменной.
- Закройте соединение с БД
-	С помощью функции mysql_num_rows() получите количество рядов результата выборки и выведите его на экран
- В цикле функцией mysql_fetch_assoc() получите очередной ряд результата выборки в виде ассоциативного массива.
  Таким образом, используя этот цикл, выведите на экран все сообщения, а также информацию
  об авторе каждого сообщения. После каджого сообщения сформируйте ссылку для удаления этой
  записи. Информацию об идентификаторе удаляемого сообщения передавайте методом GET.
*/
echo "Записей в гостевой книге: ".mysqli_num_rows($res);
for($i=0;$i<mysqli_num_rows($res);$i++){
	$st = mysqli_fetch_assoc($res);

echo "
<hr>
<p>
<a href=\"mailto:{$st['email']}\">$st[name]</a><br>
$st[msg]
</p>

<p>
<a href='$_SERVER[PHP_SELF]?del=$st[id]'>Удалить</a>	
</p>";
}

	
?>

</body>
</html>
