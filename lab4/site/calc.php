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
            echo "<p>Результат: $num1 $operator $num2 = <strong>$res</strong></p>";
			break;
		case '-':
			$res=$num1-$num2;
            echo "<p>Результат: $num1 $operator $num2 = <strong>$res</strong></p>";
			break;
		case '*':
			$res=$num1*$num2;
            echo "<p>Результат: $num1 $operator $num2 = <strong>$res</strong></p>";
			break;
		case '/':
			if($num2==0){
                echo "<p>Делить на 0 нельзя</p>";
				break;
		    }
			else{
				$res=$num1/$num2;
                echo "<p>Результат: $num1 $operator $num2 = <strong>$res</strong></p>";
				break;
			}
		default:
			"</p>Неизвестный оператор </p>";
			break;
		}
	}
}


?>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">

Число 1:<br>
<input type="text" name="num1"><br>

Оператор:<select name="operator">
                <option value="+">+
                </option><option value="-">-
                </option><option value="*">*
                </option><option value="/">/
            </option></select><br>

Число 2:<br>
<input type="text" name="num2"><br><br>

<input type="submit" value="Считать!">

</form>


