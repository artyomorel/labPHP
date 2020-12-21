 <?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(($_POST['num1']!="")&&($_POST['num2']!="")){
		$num1 = (float) $_POST['num1'];
		$num2 = (float) $_POST['num2'];
		$operator = trim(strip_tags($_POST['operator']));
/*
ЗАДАНИЕ 1
- Проверьте, была ли корректно отправлена форма
- Если она была отправлена, отфильтруйте полученные значения
- В зависимости от оператора производите различные математические действия
- В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
- Сохраните полученный результат вычисления в переменной
*/
	switch($operator){
		case '+':
			$res=$num1+$num2;
			break;
		case '-':
			$res=$num1-$num2;
			break;
		case '*':
			$res=$num1*$num2;
			break;
		case '/':
			if($num2!=0){
				$res=$num1/$num2;
				break;
		    }
			else{
				$res="a";
				break;
			}
			break;
		default:
			$res="w";
		}
	}
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Калькулятор</title>
</head>
<body>

<h1>Калькулятор</h1>

<?php
/*
ЗАДАНИЕ 2
- Если результат существует, выведите его
*/
if(isset($num1)&&isset($num2))
if(($res!="a")&&($res!="w"))
echo "<h2>Результат: $num1 $operator $num2 = $res</h2>";
elseif($res=="a")
echo "Делить на 0 нельзя";
elseif ($res=="w")
echo "Неизвестный оператор '$operator'";
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

Число 1:<br>
<input type="text" name="num1"><br><br>

Оператор:<br>
<input type="text" name="operator"><br><br>

Число 2:<br>
<input type="text" name="num2"><br><br>

<input type="submit" value="Считать!">

</form>

</body>
</html>
