<?php
	
	include "db_connect.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$writedate = date("Y-m-d H:i:s", time());
	$ip = $REMOTE_ADDR;
	$viewcount  = 0;


	$query = "INSERT INTO board (name, email, password, title, content, writedate, ip, viewcount) VALUES ('".$name."', '".$email."', '".$password."', '".$title."', '".$content."', '".$writedate."', '".$ip."', ".$viewcount.")";
//	echo $query;

	$db->query($query);

	
	echo("<meta http-equiv='refresh' content='1; url=list.php'>");

?>

<center><font size ="2"> 글을 저장했습니다</font></center>
