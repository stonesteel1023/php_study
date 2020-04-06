<?php

	include "db_connect.php";

	// 한페이지에 보일 글 수
	$page_size = 10;
	// 페이지 리스트에 보일 페이지의 갯수
	$page_list_size = 10;

	if(!$no || $no < 0)
	{
		$no = 0;
	}

	//데이터 베이스에서 페이지의 첫 글 부터 $page_size 갯수 만큼 글을 가져온다.
	$query = "SELECT * FROM board ORDER BY id DESC LIMIT ".$no.", ".$page_size;

	$result = $db->query($query);

	//총 게시물의 갯수 구하기
	$query = "SELECT count(*) FROM board";
	$temp = $db->query($query);
	$temp_row = $temp->fetch_row();
	$total_row = $temp_row[0];

//	echo $total_row;
	
	if($total_row <= 0)
	{
		$total_row = 0;
	}

	$total_page = ceil($total_row / $page_size);

	$current_page = ceil(($no + 1)/$page_size);
?>

<html>
<head>
<title>간단 게시판</title>
<style>
<!--
td {font-size : 9pt;}
A:link {font : 9pt;color : black;text-decoration : none; fontfamily
: 굴림;font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; font-size : 9pt;}
-->
</style>
</head>
<body topmargin="0" leftmargin="0" text="#464646">
<center>
             <table width="650" border="0" cellpadding="2" cellspacing="1" bgcolor="#777777">
             <!--표 제목 -->
             <tr height="20" bgcolor="#999999">
                           <td width="30" align="center">
                                        <font color="white">번호</font>
                           </td>
                           <td width="370" align="center">
                                        <font color="white">제 목</font>
                           </td>
                           <td width="50" align="center">
                                        <font color="white">글쓴이</font>
                           </td>
                           <td width="60" align="center">
                                        <font color="white">날 짜</font>
                           </td>
                           <td width="40" align="center">
                                        <font color="white">조회수</font>
                           </td>
             </tr>
<?php

	while($row = $result->fetch_array())
	{
		$id = $row['id'];
		$name = $row['name'];
		$title = $row['title'];
		$email = $row['email'];		
		$writedate = $row['writedate'];
		$viewcount = $row['viewcount'];
?>

             <tr>
             <!-- 번호 -->
             <td height="20" bgcolor="white" align="center"><?php echo $id ?></td>
             <!-- 제목 -->
             <td height="20" bgcolor="white">&nbsp;
                           <a href="read.php?id=<?php echo $id ?>&no=<?php echo $no ?>"><?php echo $title ?></a>
             </td>
             <!-- 이름 -->
             <td align="center" height="20" bgcolor="white">
                           <font color="black">
                           <a href="mailto:<?php echo $email ?>"><?php echo $name ?></a>
                           </font>
             </td>
             <!-- 날짜 -->
             <td align="center" height="20" bgcolor="white">
                           <font color="black"><?php echo $writedate ?></font>
             </td>
             <!-- 조회수 -->
             <td align="center" height="20" bgcolor="white">
                           <font color="black"><?php echo $viewcount ?></font>
             </td>
	</tr>
	<?php
	}

		$db->close();
	?>
             </table>
 
             <table border="0">
                           <tr>
                                        <td width="600" height="20" align="center" rowspan="4">
                                                     <font color="gray">
													 
<?php
$start_page = floor(($current_page - 1) / $page_list_size ) * $page_list_size + 1;
$end_page = $start_page + $page_list_size - 1;
if($total_page < $end_page)
{
	$end_page = $total_page;
}

if($start_page >=  $page_list_size)
{
	$prev_list = ($start_page - 2) * $page_size;
	echo "<a href='$PHP_SELF?no=".$prev_list."'>◀</a>";
}

	for ($i = $start_page; $i <= $end_page; $i++)
	{

		$page = ($i - 1) * $page_size;

		if($no != $page)
		{
			echo "<a href='$PHP_SELF?no=".$page."'>";
		}
		
		echo " $i ";

		if($no != $page)
		{
			echo "</a>";
		}

	}

	if($total_page >  $end_page)
	{
		$next_list = $end_page  * $page_size;
		echo "<a href='$PHP_SELF?no=".$next_list."'>▶</a>";
	}

?>
											
													 
													 
													 </font>
                                        </td>
                           </tr>
             </table>
             <a href="write.php">글쓰기</a>
</center>
</body>
</html>
