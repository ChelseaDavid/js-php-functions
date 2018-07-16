<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>PHP Functions</title>
	<body>
		<h2>PHP Math Function:</h2>
		<?php
		function getTotal($a,$b) {
			$c = $a * $b;
			return $c;
		}
		echo getTotal(12,15);
		?>

		<h2>PHP String Function</h2>
		<?php
    $string = array('Matt','birthday');
    echo join($string , " Owes Chelsea 1 million dollars for her ");
    ?>
		<h2>PHP Array Function</h2>
		<p>In case you've been living under a rock for the last 10 years, here is a list of the Hogwarts Houses</p>

		<?php
		$hogwartsHouses = array("Gryfendor","Hufflepuff","Ravenclaw","Slytherin");
		$arrLength = count($hogwartsHouses);

		for($x=0;$x<$arrLength;$x++)
		{
			echo $hogwartsHouses[$x];
			echo "<br>";
		}
		?>
	</body>
</html>