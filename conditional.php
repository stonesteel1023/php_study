<?php

	$tireqty = 201;

	if($tireqty == 0)
	{
		echo "<br />";
		echo "Ÿ�̾ �������� �����̽��ϴ�";
	}
	else
	{
		/*
		if($tireqty <= 100)
		{
			$disrate = 0.0;
		}
		elseif ($tireqty <= 200)
		{
			$disrate = 0.1;
		}
		elseif ($tireqty <= 300)
		{
			$disrate = 0.2;
		}
		else
		{
			$disrate = 0.3;
		}

	*/
		switch(intval(($tireqty -1) / 100))
		{
			case 0 :
				$disrate = 0.0;
				break;
			case 1 :
				$disrate = 0.1;
				break;
			case 2 :
				$disrate = 0.2;
				break;
			default : 
				$disrate = 0.3;
				break;

		}
	}



	define("TIREPRICE", 100000);
	$totaltireprice = $tireqty * TIREPRICE * (1 - $disrate);
	echo "�� Ÿ�̾� ���� �ݾ��� : ".$totaltireprice."�Դϴ�<br />";
	echo $disrate;



/*
$myclass = 7;

switch($myclass)
{
	case 1 :
		echo "1���Դϴ�";
		break;
	case 2 : 
		echo "2���Դϴ�";
		break;
	case 3 : 
		echo "3���Դϴ�";
		break;
	case 4 : 
		echo "4���Դϴ�";
		break;
	default : 
		echo "�Ҽӵ� ���� �����ϴ�";
		break;
}

*/
	
?>