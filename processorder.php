<?php
	echo "orderform.html���� �����͸� �޾ҽ��ϴ�<br />";

//�Ѿ�� ���� �����Ѵ�.
	$tireqty = $_POST['tireqty']; // Ÿ�̾� �ֹ��� 
	$oilqty = $_POST['oilqty'];  // ���� ���� ��
	$sparkqty = $_POST['sparkqty'];
	$address = $_POST['address'];


/*	echo "�ֹ��� Ÿ�̾� �� : ".$tireqty." ��<br />";
	echo "���� ���� �� : ".$oilqty." ��<br />";
	echo "����ũ �� : ".$sparkqty." ��<br />";
	echo "�ּ� : ".$address;
*/

	echo "�ֹ��� Ÿ�̾� �� : $tireqty ��<br />";
	echo '�ֹ��� Ÿ�̾� �� : '.$tireqty.' ��<br />';


	$totalqty = 0;
	$totalqty = $tireqty + $oilqty + $sparkqty;

	echo "�� �ֹ��� : $totalqty ��<br />";

	
	$totalprice = 0;

	define("TIREPRICE", 100000);
	define("OILPRICE", 15000);
	define("SPARKPRICE", 6000);

	$totalprice = ($tireqty * TIREPRICE) + ($oilqty * OILPRICE) + ($sparkqty * SPARKPRICE);
	$taxrate = 0.1;
	$totalprice = $totalprice * (1 + $taxrate);

	echo "�� �ֹ��ݾ�(�ΰ�������) : ".number_format($totalprice, 0, '.', ',')."��<br />";

	echo date("Y�� m�� d�� h�� i�� s��");


?>

