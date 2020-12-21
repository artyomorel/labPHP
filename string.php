
<?php
	$login = ' User ' ;
	$password = 'MEGaP@SSWRD';
	$name = 'иван';
	$email = 'artyomorel@gmail.com';
	$code = '<?=$login?>';
	
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $login и присвойте ей значение ' User '
	- Создайте строковую переменную $password и присвойте ей значение 'megAP@ssw0rd'
	- Создайте строковую переменную $name и присвойте ей значение 'иван'
	- Создайте строковую переменную $email и присвойте ей значение 'ivan@petrov.ru'
	- Создайте строковую переменную $code и присвойте ей значение '<?=$login?>'
	*/
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>

<?php
	/*
	ЗАДАНИЕ 2
	- Используя строковые функции, удалите пробельные символы в начале и конце переменной $login, а также сделайте все символы строчными (малыми)
	- Проверьте значение переменной $password на сложность: пароль должен содержать минимум одну заглавную латинскую букву, одну строчную и одну цифру, а длина должна быть не меньше 8 символов
	- Используя строковые функции, сделайте первый символ значения переменной $name прописной (большой)
	- Используя функцию фильтрации переменных проверьте корректность значения $email
	- Используя строковые функции выведите значение переменной $code в браузер в том же виде как она задана в коде
	*/
	mb_internal_encoding("UTF-8");
	echo $login,"</br>";
	$login = trim($login);
	$login = strtolower($login);
	echo $login,"</br>";
	if(preg_match("[\d]",$password) && strtolower($password) != $password && strtoupper($password) != $password && strlen($password)){
		echo "Пароль надежный</br>";
		}
	else{
		echo "Пароль ненадежный</br>";
		}
	$name = mb_strtoupper(mb_substr($name, 0, 1)) . mb_substr($name, 1);

	echo $name,"</br>	";
	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo "Email корректен </br>";
		}
	else{
		echo "Email не корректен </br>";
		}
	echo htmlentities($code,ENT_IGNORE);
    
?>
</body>
</html>
