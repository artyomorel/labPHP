<?php
	$now = time();
	$birthday =mktime(0,0,0,04,07,2000);
	$hour = getdate();
	$hour = $hour['hours'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	$welcome;
	$skolko = mktime(0,0,0,04,07,(date('Y')+1))- time();
	if($hour>0 && $hour <6){
		$welcome = 'Доброй ночи'; 
	}
	elseif($hour >=6 && $hour<12 ){
		$welcome = 'Доброе утро'; 
		}	
	elseif($hour>=12 && $hour <18){
		$welcome = 'Добрый день';
		}
	elseif($hour>=18 && $hour<23){
		$welcome = 'Добрый вечер';
		}
	else{
		$welcome = 'Доброй ночи';
		}
		
	echo "<p>{$welcome}</p>";
	setlocale(LC_ALL, 'ru_RU.utf8');
	echo '<p>Сегодня '.strftime('%d').' '.strftime('%b').' '.strftime('%Y').' года,'.strftime('%A').' '.strftime('%R').'</p>';
	//echo '<p>До моего дня рождения осталось</p>'.floor($skolko/ 86400).' дней '.floor(($skolko%86400)/3600).' часов '.floor(($skolko%3600)/60).' минут '.floor(($skolko%60)).' секунд' ;
		echo '<p>До моего дня рождения осталось</p>'.floor($skolko/ 86400).'Дней '.floor(($skolko%86400)/3600).'часов '.floor(($skolko%3600)/60).'минут '.floor(($skolko%60)).' секунд' ;
	/*
	- На отдельной строке выведите фразу До моего дня рождения осталось 
	- Выведите количество дней, часов, минут и секунд оставшееся до Вашего дня рождения
	- Закончите фразу "секунд"
	*/
	?>
</body>
</html>

