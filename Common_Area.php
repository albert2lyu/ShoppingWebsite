<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>Common Area</title>
</head>
<body>
<?php
echo "

<tr height='40'>
<td><div id='welcomebar'>
<table align='right'><tr>
<td>
<?php
session_start();
if(isset({$_SESSION['account_name']})){
	echo '�z�n�I'.'{$_SESSION['account_name']}';
	echo '</td><td><a href='logout.php'>���P</a></td>';
	
}else{
	echo '�z�n�A�w��Ө�ǩӤG��ѩ��I';
	echo '</td><td><a href='login.php'>�n��</a></td>';
}
?>
<td><a href='register.php'>�K�O���U</a></td>
</tr></table>
</div>
</td>
</tr>
<tr height='60'>
<td>
<div id='administration'> id 'administration' �����e��b�o��</div>
</td>
</tr>
<tr>
<td>
<table align='center' width='800'>
<tr>
<td width='146' height='55'>
<div id='logo'><img src='file/Logo.png' width='146' height='55' /></div>
</td>
<td width='20'>
</td>
<form action='#' method='get'>
<td width='140' valign='bottom'><input type='text' id='search_question' value='' size='20' style='height: 20pt' />
</td>
<td width='33' valign='bottom'><input type='submit' value='' style='background:url(file/search.png); height:25pt; width:25pt' />
</td>
</form>
<td width='250' align='center' valign='middle'><a href='cart.php'>�ʪ���<input type='button' value=''  style='background:url(file/cart.png); height:25pt; width:25pt'/></a></td>
<td align='center'><a href='#'>�ڪ��q��</a>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='100'>
<table align='center' cellspacing='10'>
<tr>
<td>|</td>
<td><a href='#'>�̷s����</a></td>
<td>|</td>
<td><a href='#'>�ϮѤ���</a></td>
<td>|</td>
<td><a href='#'>�q�l�Ϯ�&�ƾڮw</a></td>
<td>|</td>
<td><a href='#'>�ڪ��Ѯw</a></td>
<td>|</td>
<td><a href='#'>����ڭ�</a></td>
<td>|</td>
<td><a href='#'>�ͱ��챵</a></td>
<td>|</td>
</tr>
</table>
</td>
</tr>

";
?>
</body>
</html>