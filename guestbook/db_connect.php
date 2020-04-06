<?php
	function db_connect()
	{
		$hostName = "localhost";
		$dbUser = "DB사용자명";
		$dbPass = "비밀번호 입력";
		$dbName = "DB이름";

		$db =  new mysqli($hostName, $dbUser, $dbPass, $dbName);
		$db->query("SET NAMES utf-8");

		if(!$db)
		{
			return false;
		}
		

		return $db;
	}

?>