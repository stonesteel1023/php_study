<html>
<head><title>�ݺ���</title><head>
<body>

<table border = "0" cellpadding = "3">
	<tr>
		<td bgcolor = "#cccccc" align = "center">�Ÿ�</td>
		<td bgcolor = "#cccccc" align = "center">��ۺ�</td>
	</tr>

<?php
	
/*		$distance = 100000;
	do
	{
		echo "<tr>";
		echo "<td align = 'right'>".$distance,"</td>";
		echo "<td align = 'center'>".($distance*110)."</td>";
		echo "</tr>";

		$distance += 100;
	}while($distance <= 1000);


for ($distance = 100; $distance <= 1000; $distance += 100)
	{
		echo "<tr>";
		echo "<td align = 'right'>".$distance,"</td>";
		echo "<td align = 'center'>".($distance*110)."</td>";
		echo "</tr>";
	}
	*/

?>
</table>

<?php
	for($i = 1; $i <=100; $i++)
	{
		if(($i % 3) == 0)
		{
			continue;
		}

		echo $i;
		echo "<br />";

		
	}
?>

</body>
</html>