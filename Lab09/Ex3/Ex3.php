<?php
	echo "<link rel='stylesheet' href='Ex3.css'>";
	$password = $_POST["password"];
	$username = $_POST["username"];
	$shipping = $_POST["shipping"];
	$roomOnFire = $_POST["strokes"];
	$inRainbows = $_POST["radiohead"];
	$trick = $_POST["alexG"];
	$TroomOnFire = 29.99*$roomOnFire;
	$TinRainbows = 29.99*$inRainbows;
	$Ttrick = 29.99*$trick;
	if($shipping == "0")
	{
		$shipCost = 0;
	}
	if($shipping == "50")
	{
		$shipCost = 50;
	}
	if($shipping == "5")
	{
		$shipCost = 5;
	}
	$totalPrice = $TroomOnFire + $TinRainbows + $Ttrick + $shipCost;
	
	echo "<b> Welcome ".$username. "</b><br><br>";
	echo "Password: ". $password;
	
	echo "<br><br>Your Order was a Success<br><br>";
	echo "<table>";
	for($i = 0; $i < 6; $i++){
		echo "<tr>";
		if($i == 0)
		{
			echo "<th></th>";
			echo "<th>Quantity</th>";
			echo "<th>Cost Per Item</th>";
			echo "<th>Subtotal</th>";
		}
		elseif($i == 1)
		{
			echo "<th>Room On Fire</th>";
			echo "<td>".$roomOnFire ."</td>";
			echo "<td>$29.99</td>";
			echo "<td>$".$TroomOnFire."</td>";
		}
		elseif($i == 2)
		{
			echo "<th>In Rainbows</th>";
			echo "<td>".$inRainbows ."</td>";
			echo "<td>$29.99</td>";
			echo "<td>$".$TinRainbows."</td>";
		}
		elseif($i == 3)
		{
			echo "<th>Trick</th>";
			echo "<td>".$trick ."</td>";
			echo "<td>$29.99</td>";
			echo "<td>$".$Ttrick."</td>";
		}
		elseif($i == 4)
		{
			echo "<th>Shipping</th>";
			echo "<td colspan ='2'>".$shipping."</td>";
			echo "<td>$".$shipCost.".00</td>";
		}
		else
		{
			
			echo "<td colspan ='3'>Total Cost</td>";
			echo "<td>$".$totalPrice."</td>";
		}
		echo "</tr>";
	}
echo "</table>";
?>
