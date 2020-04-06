<?php
/*
	if(isset($_COOKIE['php']))
	{
		die("쿠기가 있습니다");
	}
	setcookie("php","php강의");
	echo "쿠기를 만들었습니다.";
	*/

	$fp = fopen("count.txt", "r");
	$count = fgets($fp, 999);
	fclose($fp);
	$count = trim($count);

//$count = file("count.txt");
//$count = trim($count[0]);

	if(!isset($_COOKIE['visit']))
	{
		$count++;
		$fp = fopen("count.txt", "w");
		fwrite($fp, $count);
		fclose(	$fp);

		setcookie('visit');
	}

		echo "방문자 수 : ".$count;
	
?>