<?php
/*
	function change_number($num1, $num2)
	{
		$temp = $num1;
		$num1 = $num2;
		$num2 = $temp;

		return array($num1, $num2);
	}

	$a = 10;
	$b = 2;
	$c = change_number($a, $b);
	
	echo $c[0];
	echo "<br />";
	echo $c[1];
*/


	function add($a, $b)
	{
		$c = $a + $b;

		return $c;
	}

	
	

	$a = 10;
	$b = 2;

	echo add($a, $b);


?>