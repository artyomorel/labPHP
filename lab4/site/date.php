<?php
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $now
	- Создайте строковую переменную $birthday
	- Присвойте переменной $now значение метки времени актуальной даты(сегодня)
	- Присвойте переменной $birthday значение метки времени Вашего дня рождения
	- Создайте переменную $hour
	- С помощью функуии getdate() присвойте переменной $hour текущий час
	*/
	$ar=getdate();
	$hour=$ar["hours"];

	if(($hour<6)&&($hour>0)){
		$welcome="Доброе утро";
	}elseif(($hour>=6)&&($hour<18)){
		$welcome="Добрый день";
	}elseif(($hour>=18)&&($hour<23)){
		$welcome="Добрый вечер";
	}else{
		$welcome="Доброй ночи";
	}
	?>
