<?php
	include "db_connect.php";

	$no = $_GET['no'];
	$id = $_GET['id'];

	// 데이터베이스에서 자료 긁어 오기

	$query = "SELECT * FROM board WHERE id=".$id;

	$result = $db->query($query);
	$row = $result->fetch_array();

	$name = $row['name'];
	$email = $row['email'];
	$title = $row['title'];
	$content = $row['content'];
	$writedate = $row['writedate'];
	$viewcount = $row['viewcount'];

?>

<html>
<head>
<title>간단 게시판</title>
<style>
<!--
td {font-size : 9pt;}
A:link {font : 9pt; color : black; text-decoration : none;
font-family : 굴림; font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; 
font-size : 9pt;}
-->
</style>
</head> 
<body topmargin="0" leftmargin="0" text="#464646">
<center>
<BR>
<table width="650" border="0" cellpadding="2" cellspacing="1" bgcolor="#777777">
<tr>
        <td height="20" colspan="4" align="center" bgcolor="#999999">
                <font color="white"><B><?php echo $title ?></B></font>
        </td>
</tr>
<tr>
        <td width="50" height="20" align="center" bgcolor="#EEEEEE">글쓴이</td>
        <td width="240" bgcolor="white"><?php echo $name ?></td>
        <td width="50" height="20" align="center" bgcolor="#EEEEEE">이메일</td>
        <td    width="240" bgcolor="white"><?php echo $email ?></td>
</tr>
<tr>
        <td width="50" height="20" align="center" bgcolor="#EEEEEE">날&nbsp;&nbsp;&nbsp;짜</td>
        <td width="240" bgcolor="white"><?php echo $writedate ?></td>
        <td width="50" height="20" align="center" bgcolor="#EEEEEE">조회수</td>
        <td    width="240" bgcolor="white"><?php echo $viewcount ?></td>
</tr>
<tr>
        <td bgcolor="white" colspan="4">
        <font color="black">
        <pre><?php echo $content ?></pre>
        </font>
        </td>
</tr>
<!-- 기타 버튼 들 -->
<tr>
        <td colspan="4" bgcolor="#999999">
        <table width="100%">
                <tr>
                        <td width="200" align="left" height="20">
                                <a href="list.php?no=<?php echo $no ?>"><font color="white">[목록보기]</font></a>
                                <a href="write.php"><font color="white">[글쓰기]</font></a>
                                <a href="edit.php?id=<?php echo $id ?>"><font color="white">[수정]</font></a>
                                <a href="delpass.php?id=<?php echo $id ?>"><font color="white">[삭제]</font></a>
                        </td>
                        <!--이전 다음 표시 -->
                        <td align="right">
						<?php
							$query = "SELECT id FROM board WHERE id > ".$id." ORDER BY id ASC LIMIT 1";
							$result = $db->query($query);
							$prev_id = $result->fetch_array();
							
							if($prev_id['id'])
							{
								echo "<a href=read.php?id=".$prev_id['id']."><font color='white'>[이전]</font></a>";
							}
							else
							{
								echo "[이전]";
							}

							
							$query = "SELECT id FROM board WHERE id < ".$id." ORDER BY id DESC LIMIT 1";
							$result = $db->query($query);
							$next_id = $result->fetch_array();
							
							if($next_id['id'])
							{
								echo "<a href=read.php?id=".$next_id['id']."><font color='white'>[다음]</font></a>";
							}
							else
							{
								echo "[다음]";
							}

						?>
                        </td>
                </tr>
        </table>
        </b></font>
        </td>
</tr>
</table>
</center>
</body>
</html>

<?php

// 조회수 데이터 베이스에서 변경하기

	$query ="UPDATE board SET viewcount = viewcount +1 WHERE id = ".$id;
	$db->query($query);

	$db->close();
?>
