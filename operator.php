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


//����������
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
// ���Կ�����

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
		echo "�� ���� ��� ���Դϴ�";
	}
	else
	{
		echo "�� ���� ��� ���� �ƴմϴ�";
	}



	$result = (($a == $b) && ($c == $d)) ? "�� ���� ��� ���Դϴ�" : "�� ���� ��� ���� �ƴմϴ�";

	echo $result;



	echo gettype($a);
	echo "<br />";
	settype($a, 'double');
	echo gettype($a);
	echo "<br />";
	echo gettype($b);

	echo is_integer($a) ? '$a�� �������Դϴ�' : '$a�� �������� �ƴմϴ�';


	$k = "";
	echo isset($k) ? '$k������ �����մϴ�' : '$k������ �������� �ʽ��ϴ�.';
	echo "<br />";
	echo empty($k) ? '$k������ ����ֽ��ϴ�.' : '$k������ ������� �ʽ��ϴ�.';
*/
	echo intval("15.5")*2;
	echo "<br />";
	echo floatval("15.5")*2;
?>