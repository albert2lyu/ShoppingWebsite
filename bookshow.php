<?php require_once('Connection/ConnectToDatabase.php');
?>
<?php
mysql_select_db($database_connQuestion, $connQuestion);
$query = "SELECT * FROM books where Name= '{$_GET['id']}'";
$result = mysql_query($query, $connQuestion) or die(mysql_error());
if (!$row = mysql_fetch_array($result))
  {
	  $ERROR_MESG="�o���Ѥ��s�b�A�Э��s�j��";
     echo "<script language=javascript>
             alert('$ERROR_MESG') ;
             self.history.go(-1) ;
          </script>";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>
<?php
echo $_GET['id'];
?>
</title>
<link rel=stylesheet type="text/css" href="homework.css">
</head>
<body>
<table width="800" align="center" border="2" cellpadding="0" cellspacing="0">
<!--�b�o�̲K�[Common Area-->
<!--
<?php
	include 'Common_Area.php';
?>
-->

<tr height="40">
<td><div id="welcomebar" class="welcomebar">
<table align="right"><tr>
<td>
<?php
//session_start();
if(isset($_SESSION['account_name'])){
	echo "�z�n�I"."{$_SESSION['account_name']}";
	echo "</td><td><a href='logout.php' class='welcomebara'>���P</a></td>";
	
}else{
	echo "�z�n�A�w��Ө�ǩӤG��ѩ��I";
	echo "</td><td><a href='login.php' class='welcomebara'>�n��</a></td>";
}
?>
<td><a href="register.php" class="welcomebara">&nbsp;�K�O���U</a></td>
</tr></table>
</div>
</td>
</tr>
<tr height="60">
<td width="800" height="120">
<div id="administration"><img src="file/administration.png" /></div>
</td>
</tr>
<tr>
<td>
<table align="center" width="800">
<tr>
<td width="146" height="55">
<div id="logo"><a href="index.php"><img src="file/Logo.png" width="146" height="55" /></a></div>
</td>
<td width="20">
</td>
<td width="400" valign="middle">
<FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.com/intl/zh-CN/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" 
border="0" ALT="Google" align="absmiddle" width="81" height="27"></A>
<INPUT TYPE=text name=q size=20 maxlength=255 value="">
<INPUT TYPE=hidden name=hl  value=zh-CN>
<INPUT type=submit name=btnG  value="Google �j��">
</td></tr></TABLE>
</FORM>
</td>
<td width="100" align="center" valign="middle"><a href="cart.php" class="leadingbara">�ʪ���<img src="file/cart.png" width="25" height="25" align="absmiddle"/></a></td>
<td align="center"><a href="order.php" class="leadingbara">�ڪ��q��</a>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height="80">
<table align="center" cellspacing="10">
<tr>
<td>|</td>
<td><a href="index.php" class="leadingbara">����</a></td>
<td>|</td>
<td><a href="news.php" class="leadingbara">�̷s����</a></td>
<td>|</td>
<td><a href="#" class="leadingbara">�q�l�Ϯ�&�ƾڮw</a></td>
<td>|</td>
<td><a href="#" class="leadingbara">�ڪ��Ѯw</a></td>
<td>|</td>
<td><a href="about.php" class="leadingbara">����ڭ�</a></td>
<td>|</td>
<td><a href="#" class="leadingbara">�ͱ��챵</a></td>
<td>|</td>
</tr>
</table>
</td>
</tr>


<!--�b�o�̲K�[Common Area-->
<tr>
<td>
<table height="400" border="1" cellspacing="0">
<tr>
<td valign="top">
<?php
echo "<img  width='300'  height='400' src='file/books/{$row["Picture"]}'/>";
?>
</td>
<td valign="top" align="center" width="500">

<table border="1" cellspacing="0" class="bookshowtable">
<?php
echo "<tr><td class='bookshowpreference' width='100'>�ѦW�G</td><td width='250' class='bookshowcontent'>{$row["Name"]}</td></tr>";
echo "<tr><td class='bookshowpreference'>�@�̡G</td><td class='bookshowcontent'>{$row["Author"]}</td></tr>";
echo "<tr><td class='bookshowpreference'>����G</td><td class='bookshowprice'>�D{$row["Price"]}</td></tr>";
echo "<tr><td class='bookshowpreference'>�X�����G</td><td class='bookshowcontent'>{$row["Press"]}</td></tr>";
echo "<tr><td class='bookshowpreference'>�W�[�ɶ��G</td><td class='bookshowcontent'>{$row["DateAdd"]}</td></tr>";
echo "<tr height='200'><td class='bookshowpreference'>�y�z�G</td><td class='bookshowcontent'>{$row["Description"]}</td></tr>";
?>
<tr><td colspan="2" align="center">
<form name="addform" method="post" action="addtocart.php">
<?php
echo "<input type='hidden' value='{$_GET['id']}' name='bookname'/>";
?>
<input type="submit" value="�[�J�ʪ���"/>
</form>
</td></tr>
</table>

</td>
</tr>
</table>
</td>
</tr>
<!--����-->

<tr>
<td align="center">
Copyright @2013 South China University of Technology / Guangzhou Campus. All Rights Reserved.<br/>�s�F�ټs�{���f��ϼs�{�j�ǫ��~���F��381�� &nbsp;&nbsp; �q��:(020)39380110
</td>
</tr>

<!--����-->
</table>
</body>
</html>