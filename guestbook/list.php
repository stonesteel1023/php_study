<?php
	include("db_connect.php");
	$conn = db_connect();

	$query = "SELECT * FROM guestbook ORDER BY id DESC";

	$result = $conn->query($query);

	$totalcount = $result->num_rows;

	$pagesize = 3;
?>

<html>
<head><title>방명록입니다</title></head>
<body>
<form action="insert.php" method ="post">
<table border="1" width="600">
	<tr>
		<td>이름</td><td><input type="text" name="name"></td>
		<td>비밀번호</td><td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td colspan="4">	
			<textarea name="content" cols="80" rows="5"></textarea>
		</td>
	</tr>
		<td colspan="4" align="center"><input type="submit" value="확인"></td>
	</tr>
</table>
</form>

<?php

	$no = $_GET['no'];

	for($i= $no; $i < $no + $pagesize; $i++)
	{
		if($i < $totalcount)
		{
			$result->data_seek($i);
			$row = $result->fetch_array();

			$id = $row['id'];
			$name = $row['name'];
			$password = $row['password'];
			$content = $row['content'];
			$writedate = $row['writedate'];



			echo "<table width='600' border='1'>";
			echo "		<tr>";
			echo "        <td>".$id."</td>";
			echo "<td>".$name."</td>";
			echo "<td>".$writedate."</td>";
			echo "<td><a href='delete.php?id=".$id."'>삭제</a></td>";
			echo "    </tr>";
			echo "    <tr>";
			echo "        <td colspan = 4>".$content."</td>";
			echo "    </tr>";
			echo "</table>";
		}
	}

	$prev = $no - $pagesize;
	$next = $no + $pagesize;

	if($prev >= 0)
	{
		echo ("<a href='$PHP_SELF?no=$prev'>이전</a>");
	}
	if($next < $totalcount)
	{
		echo ("<a href='$PHP_SELF?no=$next'>다음</a>");
	}

?>

</body>
</html>