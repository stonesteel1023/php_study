<?php
	function db_connect()
	{
		$hostName = "localhost";
		$dbUser = "DB����ڸ�";
		$dbPass = "��й�ȣ �Է�";
		$dbName = "DB�̸�";

		$db =  new mysqli($hostName, $dbUser, $dbPass, $dbName);
		$db->query("SET NAMES utf-8");

		if(!$db)
		{
			return false;
		}
		

		return $db;
	}

?>