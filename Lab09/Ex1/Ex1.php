<?php
echo "<table style = 'border: 1px solid; border collapse: collapse;'>";
for($i =0 ; $i<=100; $i++){
	echo "<tr>";
	for($j = 0; $j<=100; $j++){
	if($i == 0 && $j == 0){
		echo "<td style = 'border: 1px solid;'></td>"; 
	}
	elseif($i == 0){
		echo "<th style = 'border: 1px solid;'>" . $j . "</th>";
	}
	elseif($j == 0){
		echo "<th style = 'border: 1px solid;'>" . $i . "</th>";
	}
	else{
	$x = $i * $j;
		echo "<td style = 'border: 1px solid;'>" . $x . "</td>";
	}
}
	echo "</tr>";
}
echo "</table>";
?>
