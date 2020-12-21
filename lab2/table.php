<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
	<style>
		table{
			border: 1px solid;
			border-spacing:0;
			margin:0 auto 20px;
			
		}
		td,th{
			padding:20px;
			border: 1px solid black;
			}
			
	</style>


    <title>Document</title>
</head>
<body>
<?
$rows = 10;
$cols = 10;
$color = "cyan";
$table = "<table>";
for ($i = 1;$i<=$rows;$i++){
		$table .= "<tr>";
		for($j=1;$j<=$cols;$j++){
			if($i==1||$j==1){
				$table .= '<th style = "background-color:'.$color.';">'.$i*$j.'</th>';
				}
				else{
					$table .= '<td>'.$i*$j.'</td>';
					}
			}
		$table .= "</tr>";
	}
$table .= "</table>";
echo $table;
?>
</body>
</html>
