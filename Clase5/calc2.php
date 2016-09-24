<DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<?php
		$y=$_POST["a"];
		$z=$_POST["b"];
		echo "El resultado es: ";
		if(isset($_POST['btsuma']))
		{
			$c=$y+$z;
			echo "$y + $z es ".$c ;
		}
		if(isset($_POST['btresta']))
		{
			$c=$y-$z;
			echo "$y - $z es ".$c ;
		}
		if(isset($_POST['btmult']))
		{
			$c=$y*$z;
			echo "$y * $z es ".$c ;
		}
		if(isset($_POST['btdiv']))
		{
			if ($z!=0)
				{
						$c=$y/$z;
				}
			else
				{
					$c=0;
				}
			echo "$y / $z es ".$c ;
		}
	?>
	<form name "Calc" action="calc2.php" method="POST">
	A: <input type="text" name="a" size="10" value="<?php echo $y;?>">
	B: <input type="text" name="b" size="10" value="<?php echo $z;?>">
		
	<br>

	<input type="submit" value="Suma" name="btsuma">
	<input type="submit" value="Resta" name="btresta">
	<input type="submit" value="Mult" name="btmult">
	<input type="submit" value="Division" name="btdiv">
	</form>
</body>
</html>