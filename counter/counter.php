<?php
/*
	if(isset($_COOKIE['php']))
	{
		die("��Ⱑ �ֽ��ϴ�");
	}
	setcookie("php","php����");
	echo "��⸦ ��������ϴ�.";
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

		echo "�湮�� �� : ".$count;
	
?>