<?php
// Создание структуры Базы Данных гостевой книги

define('DB_HOST', 'localhost');
define('DB_LOGIN', 'f0489291_root');
define('DB_PASSWORD', 'qwerty');
define('DB_NAME', 'f0489291_MyDB');

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
if (!$link) {
    echo 'Ошибка: Невозможно установить соединение с MySQL.' . PHP_EOL;
    echo 'Код ошибки errno: ' . mysqli_connect_errno() . PHP_EOL;
    echo 'Текст ошибки error: ' . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_set_charset($link, 'utf8');
$sql = "
CREATE TABLE msgs (
	id serial,
	name varchar(50) NOT NULL default '',
	email varchar(50) NOT NULL default '',
	msg text,
	PRIMARY KEY (id))
ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci";
if (mysqli_query($link, $sql) === true){
    echo 'Структура базы данных успешно создана!';
}else{
    echo "<h3>База уже была создана</h3>";
}
mysqli_close($link);