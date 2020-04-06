<?php

	$tireqty = 201;

	if($tireqty == 0)
	{
		echo "<br />";
		echo "타이어를 구매하지 않으셨습니다";
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
	echo "총 타이어 구매 금액은 : ".$totaltireprice."입니다<br />";
	echo $disrate;



/*
$myclass = 7;

switch($myclass)
{
	case 1 :
		echo "1반입니다";
		break;
	case 2 : 
		echo "2반입니다";
		break;
	case 3 : 
		echo "3반입니다";
		break;
	case 4 : 
		echo "4반입니다";
		break;
	default : 
		echo "소속된 반이 없습니다";
		break;
}

*/
	
?>