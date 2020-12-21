<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$cols = abs((int) $_POST['cols']);
	$rows = abs((int) $_POST['rows']);
	$color = trim(strip_tags($_POST['color']));
}
$cols = isset($cols) ? $cols : 10;
$rows = isset($rows) ? $rows : 10;
$color = isset($color) ? $color : '#5641F6';
?>
    <!-- Область основного контента -->
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
      <label>Количество колонок: </label>
      <br>
      <input name='cols' type='text' value='<?=$cols?>'>
      <br>
      <label>Количество строк: </label>
      <br>
      <input name='rows' type='text' value='<?=$rows?>'>
      <br>
      <label>Цвет: </label>
      <br>
      
      <input type="color" value="#5641F6" name="color">
      <br>
      <br>
      <input type='submit' value='Создать'>
    </form>
    <br>
    <!-- Таблица -->
    <?php 
    
    getTable($cols,$rows,$color); 
    ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
