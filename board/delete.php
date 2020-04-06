<?php

	include "db_connect.php";

	$id = $_GET['id'];
	$password = $_POST['password'];

	$query = "SELECT password FROM board WHERE id = ".$id;

	$result = $db->query($query);
	$row = $result->fetch_array();

	if($password == $row['password'])
	{
		$query = "DELETE FROM board WHERE id = ".$id;

		$db->query($query);
	}
	else
	{
		echo "<script language='javascript'>
				alert ('비밀번호를 틀렸습니다');
				history.go(-1);
				</script>";
		exit;
	}

	$db->close();

	echo "<meta http-equiv='refresh' content='1; URL=list.php'>";

?>

<center><font size='2'>글이 삭제되었습니다</font></center>