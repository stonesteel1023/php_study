<?php

/*	$a = array("월", "화", "수", "목", "금", "토", "일");
//	echo $a[0].", ".$a[1].", ".$a[2].",".$a[3].", ".$a[4].", ".$a[5].", ".$a[6];

	for($i = 0; $i <= 6; $i++)
	{
		echo $a[$i];

		
		if($i !=6)
		{
			echo "<br />";
		}
	}


	$number = range(1, 100);
	for($i = 0; $i < count($number); $i++)
	{
		echo $number[$i];
		echo ",";
	}



	$products = array("Tires", "Oil", "SparkPlug");
	for($i = 0; $i < count($products); $i++)
	{
		echo $products[$i];
		echo ",";
	}
	echo "<br />";

	$products[3] = "Fuse";
	for($i = 0; $i < count($products); $i++)
	{
		echo $products[$i];
		echo ",";
	}
	echo "<br />";



	$prices = array("Tires"=>100000, "Oil"=>15000, "SparkPlug"=>6000);
	$prices["Fuse"] = 500;
	$prices["light"] = 30000;

	echo $prices["Tires"];
	echo $prices["Oil"];
	echo $prices["SparkPlug"];
	echo $prices["Fuse"];

	foreach($prices as $key => $value)
	{
		echo $key."=>".$value."<br />";
	}

		*/

//다차원 배열

$products = array(array("TIR", "Tires", 100000),
						  array("OIL", "Oil", 15000));

$num = array(45, 10, 99, 3, 77,22, 10000);
sort($num, SORT_STRING);
for($i = 0; $i < count ($num); $i++)
{
	echo $num[$i].", ";
}

echo "<br />";
sort($num, SORT_NUMERIC);
for($j = 0; $j < count ($num); $j++)
{
	echo $num[$j].", ";
}



?>