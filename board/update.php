<?php
	include "db_connect.php";

	$id = $_GET['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$title = $_POST['title'];
	$content = $_POST['content'];


	$query = "SELECT password FROM board WHERE id = ".$id;

	$result = $db->query($query );
	$row = $result->fetch_array();

//	echo $password;
//	echo $row['password'];

	if($password == $row['password'])
	{
		$query = "UPDATE board SET name='".$name."', email='".$email."', title='".$title."', content='".$content."' WHERE id= ".$id;

		$db->query($query);
	}
	else
	{
		echo "<script language='javascript'>
				alert('비밀번호가 틀렸습니다');
				history.go(-1);
				</script>";
		exit;
	}

	$db->close();

	echo("<meta http-equiv='refresh' content='1; URL=read.php?id=".$id."'>");

?>

<center><font size="2">글이 수정되었습니다</font></center>