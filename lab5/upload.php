<!doctype html>
<html lang="ru">
 <head>
	<meta charset="utf-8">
	<title>Загрузка файла на сервер</title>
</head>
 <body>
  <div>
   <?php
/*
ЗАДАНИЕ
- Проверьте, отправлялся ли файл на сервер
- В случае, если файл был отправлен, выведите: имя файла, размер, имя временного файла, тип, код ошибки
- Если загружен файл типа "image/jpeg", то с помощью функции move_uploaded_file() переместите его в каталог upload
*/
//   function translit($str) {
//     $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
//     $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
//     return str_replace($rus, $lat, $str);
//   }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if($_FILES['fupload']['tmp_name']!=""){
	        $ru = ($_FILES['fupload']['name']);
		echo "Имя файла: ".$ru."<br>";
		echo "Размер: ".$_FILES['fupload']['size']."байт<br>";
		echo "Имя временного файла: ".$_FILES['fupload']['tmp_name']."<br>";
		echo "Тип файла: ".$_FILES['fupload']['type']."<br>";
		echo "Код ошибки: ".$_FILES['fupload']['error']."<br>";
	
	$tmpfile=$_FILES['fupload']['tmp_name'];
	$uploaddir = './upload/';
// 	$uploadfile = $uploaddir.basename($_FILES['fupload']['name']);
	$uploadfile = $uploaddir.($_FILES['fupload']['name']);
// 	echo $uploadfile."<br>";
	
	if($_FILES['fupload']['type']=='image/jpeg'){
		move_uploaded_file($_FILES['fupload']['tmp_name'], $uploadfile);
		$s="upload/".$ru;
// 		$_FILES['fupload']['name'];
		echo "<img src=$s >";
	}
	}
}
?>

  </div>
  <form enctype="multipart/form-data"
        action="<?php print $_SERVER['PHP_SELF']?>" method="POST">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="1024000">
      <input type="file"   name="fupload"><br>
      <input type="submit" value="Загрузить">
    </p>
   </form>
 </body>
</html>
