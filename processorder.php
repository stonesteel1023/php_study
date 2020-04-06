<?php
	echo "orderform.html에서 데이터를 받았습니다<br />";

//넘어온 값을 저장한다.
	$tireqty = $_POST['tireqty']; // 타이어 주문수 
	$oilqty = $_POST['oilqty'];  // 엔진 오일 수
	$sparkqty = $_POST['sparkqty'];
	$address = $_POST['address'];


/*	echo "주문한 타이어 수 : ".$tireqty." 개<br />";
	echo "엔진 오일 수 : ".$oilqty." 개<br />";
	echo "스파크 수 : ".$sparkqty." 개<br />";
	echo "주소 : ".$address;
*/

	echo "주문한 타이어 수 : $tireqty 개<br />";
	echo '주문한 타이어 수 : '.$tireqty.' 개<br />';


	$totalqty = 0;
	$totalqty = $tireqty + $oilqty + $sparkqty;

	echo "총 주문수 : $totalqty 개<br />";

	
	$totalprice = 0;

	define("TIREPRICE", 100000);
	define("OILPRICE", 15000);
	define("SPARKPRICE", 6000);

	$totalprice = ($tireqty * TIREPRICE) + ($oilqty * OILPRICE) + ($sparkqty * SPARKPRICE);
	$taxrate = 0.1;
	$totalprice = $totalprice * (1 + $taxrate);

	echo "총 주문금액(부가세포함) : ".number_format($totalprice, 0, '.', ',')."원<br />";

	echo date("Y년 m월 d일 h시 i분 s초");


?>

