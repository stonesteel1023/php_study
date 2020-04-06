<?php

	function fill_alert()
	{
?>
	<script language="javascript">
		alert("내용을 모두 채워 주세요.");
		history.go(-1);
	</script>
<?php
	}
?>


<?php
	
	$name = $_POST['name'];
	$password = $_POST['password'];
	$content = $_POST['content'];


	if(empty($name) || empty($password) || empty($content))
	{
		fill_alert();
		exit();
	}

	include("db_connect.php");

	$conn = db_connect();

	$query = "INSERT INTO guestbook (name, password, content) VALUES(\"".$name."\", \"".$password."\", \"".$content."\")";
	
//	echo $query;

	$conn->query($query);
?>
	<script language="javascript">
		alert("글이 등록되었습니다..");
		location.href="list.php"
	</script>


