<?php
	function getTable($cols=10,$rows=10,$color="yellow"){
		echo "<table>";
		for($i=1;$i<=$rows;$i++){
			echo "<tr>";		
			for($j=1;$j<=$cols;$j++){
				if($i==1)
					echo "<th style=\"background-color:$color;\">$j</th>";
				elseif($j==1)
					echo "<th style=\"background-color:$color;\">$i</th>";
				else{
					$a=$j*$i;
					echo "<td>$a</td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	};
	
	
	function getMenu($menu,$vertical=true){
	echo "<ul>";
	foreach ($menu as $val){
		if($vertical){
		echo "<li ><a href='{$val['href']}'>{$val['link']}</a></li>";
		}
		else
		echo "<li style=\"float: left\"><a style=\"display: block; margin: 10px;\" href='{$val['href']}'>{$val['link']}</a></li>";
		}
	echo "</ul>";
	}
?>
