<?php
	
	$id = $_GET['id'];
	$password = $_POST['password'];

	if($mode != 'delete')
	{
		echo "<html>";
		echo "	<form action='".$PHP_SELF."?id=".$id."&mode=delete' method='post'>";
		echo "	<table width='600' border='1'>";
		echo "		<tr>";
		echo "			<td>비밀번호</td>";
		echo "				<td><input type='password' name='password'></td>";
		echo "				<td><input type='submit' value='확인'></td>";
		echo "			</tr>";
		echo "	</table>";
		echo "	<form>";
		echo "</html>";
		exit;
	}

	include("db_connect.php");

	$conn = db_connect();

	$query = "SELECT password FROM guestbook WHERE id = '".$id."'";
	$result = $conn->query($query);
	
	$row = $result->fetch_array();

	if($row['password'] == $password)
	{
		$query = "DELETE FROM guestbook WHERE id = '".$id."'";
		$result = $conn->query($query);
	}

?>

<script language="javascript">
		alert("글이 삭제되었습니다");
		location.href="list.php";
</script>