<html>
<head>
<title>간단 게시판</title>
<style>
<!--
td { font-size : 9pt; }
A:link { font : 9pt; color : black; text-decoration : none; 
font-family     : 굴림; font-size : 9pt; }
A:visited { text-decoration : none; color : black; font-size : 9pt; }
A:hover { text-decoration : underline; color : black; 
font-size : 9pt; }
-->
</style>
</head>
 
<body topmargin=0 leftmargin=0 text="#000000">
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action="insert.php" method="post">
<table width="650" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
                <td height="20" align="center" bgcolor="#111111" colspan="2">
                <font color="white"><B>글 쓰 기</B></font>
                </td>
        </tr>
        <!-- 입력 부분 -->
        <tr>
                <td width="100" align="left">이름</td>
                <td align="left">
                        <INPUT type="text" name="name" size="20" maxlength="10">
                </td>
        </tr>
        <tr>
                <td width="100" align="left" >이메일</td>
                <td align="left" >
                        <INPUT type="text" name="email" size="20" maxlength="25">
                </td>
        </tr>
        <tr>
                <td width="100" align="left">비밀번호</td>
                <td align="left">
                        <INPUT type="password" name="password" size="8" maxlength="8">(글을 수정,삭제할 때 필요합니다.)
                </td>
        </tr>
        <tr>
                <td width="100" align="left">제 목</td>
                <td align="left">
                        <INPUT type="text" name="title" size="60" maxlength="35">
                </td>
        </tr>
        <tr>
                <td width="100" align="left">내용</td>
                <td align="left">
                        <TEXTAREA name="content" cols="65" rows="15"></TEXTAREA>
                </td>
        </tr>
        <tr>
                <td colspan="2" align="center">
                        <INPUT type="submit" value="글 저장하기">
                        &nbsp;&nbsp;
                        <INPUT type="reset" value="다시 쓰기">
                        &nbsp;&nbsp;
                        <INPUT type="button" value="되돌아가기" onclick="history.go(-1)">
                </td>
        </tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>
</html>