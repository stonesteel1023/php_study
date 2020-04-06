<?php

/*
	$a = 20;
	$b = 6;

	$result = (integer)($a / $b);
	echo $result;
	echo "<br />";

	$result = $a % $b;
	echo $result;
	echo "<br />";

	$k = $result = $a / $b;


//증가연산자
	$n = 1;
	$result = 10 + $n++;
	echo $result;
	echo "<br />";
	$n = 1;
	$result = 10 + ++$n;
	echo $result;
	echo "<br />";

*/

/*
// 대입연산자

	$a = 20;
	$b = 6;

	$a = $a + $b;
	$a += $b;
	echo '$a += $b =>'.$a;
	echo "<br />";

	$a = 20;
	$b = 6;
	$a -= $b;
	echo '$a -= $b =>'.$a;
	echo "<br />";

	$a = 20;
	$b = 6;
	$a *= $b;
	echo '$a *= $b =>'.$a;
	echo "<br />";

	$a = 20;
	$b = 6;
	$a /= $b;
	echo '$a /= $b =>'.$a;
	echo "<br />";

	$a = 20;
	$b = 6;
	$a %= $b;
	echo '$a %= $b =>'.$a;
	echo "<br />";

	$a = 20;
	$b = 6;
	$a .= $b;
	echo '$a .= $b =>'.$a;
	echo "<br />";
	
	*/


	$a = 5.0;
	$b = "5";

	$c = 15;
	$d = 15;
/*
	echo $a === $b;
	echo "<br />";
	echo $c == $d;


	if (($a == $b) && ($c == $d))
	{
		echo "두 식이 모두 참입니다";
	}
	else
	{
		echo "두 식이 모두 참은 아닙니다";
	}



	$result = (($a == $b) && ($c == $d)) ? "두 식이 모두 참입니다" : "두 식이 모두 참은 아닙니다";

	echo $result;



	echo gettype($a);
	echo "<br />";
	settype($a, 'double');
	echo gettype($a);
	echo "<br />";
	echo gettype($b);

	echo is_integer($a) ? '$a는 정수형입니다' : '$a는 정수형이 아닙니다';


	$k = "";
	echo isset($k) ? '$k변수는 존재합니다' : '$k변수는 존재하지 않습니다.';
	echo "<br />";
	echo empty($k) ? '$k변수는 비어있습니다.' : '$k변수는 비어있지 않습니다.';
*/
	echo intval("15.5")*2;
	echo "<br />";
	echo floatval("15.5")*2;
?>