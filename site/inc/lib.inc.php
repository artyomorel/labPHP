<?php
function GetTable($rows=10,$cols=10,$color="red"){
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
    return $table;
}




function GetMenu($menu,$vertical = true){
	echo "<ul>";
	if($vertical){
		foreach($menu as $key){
		echo "<li><a href={$key['href']}>{$key['link']}</a></li>";
		}
	}
	else{
		foreach($menu as $key){
		echo "<li style = ' display: inline;'><a href=\"{$key['href']}\">{$key['link']}</a></li>";
		}
	}	
	echo "</ul>";
	}
?>