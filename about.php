<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>����ڭ�</title>
<link rel=stylesheet type="text/css" href="homework.css">
<style type="text/css">
p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #03F;
}
li {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 16px;
	color: #000;
}
.board {
	width: 500px;
	margin-right: 20px;
	margin-left: 20px;
}
</style>
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
<td width="800" height="600" background="file/about.png">
<!--�b�o�̲K�[����ڭ̪��峹-->
<div class="board">
<br /><br /><br /><br /><br /><br /><br />
<p>
�@�D�����v���G
</p>
<ul><li>
�ǩӤG��ѩ��éӪA�Ⱦǥ͡B�A�Ȥj���B�`�����O�B���Q�@Ĺ����h���s�j�ǥͩM���������u�誺�G��ѥ�����x�A�ȡC
</li></ul>
<p>
�G�D�B����G
</p>
<ul><li>
�ثn�z�u�j��2010�Źq�l�ӰȨt
</li></ul>
<p>
�T�D�A�ȹ�H�G
</p>
<ul><li>
�ثn�z�u�j�Ǥj�ǳ��ǥͤΪ��|�W�ݭn�����Ч��H�h�C
</li></ul>
<p>
�|�D�ާ@�ӫh�G
</p>
<ol>
<li>
�R�a�b�u�W�q�ʫe�Э����n���b���H�ѧO�ӤH�����C
</li>
<li>
�R�a���ӥ��`�����ʬy�{��ӫ~��J�ʪ����B�q��T�{�B����C
</li>
<li>
�դ��q�ʪ����y�|�b�@�Ѥ��e�F�A�Яd�N²�T���f�q���C
</li>
<li>
�ե~�q�ʪ����y�|�q�L�ֻ��ζl�H���覡�ѲĤT�誫�y���q�b�T�Ӥu�@�餺�e�F�A�R���ʶR��ѵo�f�C
</li>
<li>
���骺�d�����ڽ��s���m�ǩӤG��ѩ��d���P�K�d�n���n�C
</li>
</ol>
</div>
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