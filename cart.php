<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['account_name'])){
	
	 $ERROR_MESG = "�z�٨S���n���A�Х��n��";
     echo "<script language=javascript>
             document.execCommand('stop');
			 window.stop();
			 alert('$ERROR_MESG') ;
			 window.location.href='login.php';
          </script>";
}
?>
<?php require_once('Connection/ConnectToDatabase.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>�ڪ��ʪ���</title>
<link rel=stylesheet type="text/css" href="homework.css">
<link rel=stylesheet type="text/css" href="cart_order_manage.css">
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
<td valign="top" height="800">
<table width="800">
<tr><td colspan="5" class="titlefont">�ڪ��ʪ���</td></tr>
<tr class="thfont">
<th align="center" width="200">�ӫ~</th>
<th align="center">�Ϥ�</th>
<th align="center">����</th>
<th align="center">�ƶq</th>
<th align="center">�ާ@</th>
</tr>
<?php
mysql_select_db($database_connQuestion, $connQuestion);
$query = "SELECT Product_Name, Picture, Price, Number FROM cart, books WHERE cart.Product_Name = books.Name and Client_Mail= '{$_SESSION['account_name']}'";
$result = mysql_query($query, $connQuestion) or die(mysql_error());
$total = 0;
if($row = mysql_fetch_array($result)){
do{
	  echo "<tr  valign='top'><td align='center' class='tdfont'>";
	  echo $row["Product_Name"];
	  echo "</td><td align='center'>";
	  echo "<img src='file/books/{$row["Picture"]}' border='1'/>";
	  echo "</td><td align='center' class='tdpricefont'>";
	  echo $row["Price"];
	  echo "</td><td align='center' align='center' class='tdfont'>";
	  echo "<a href='addone.php?Product_Name={$row['Product_Name']}'><img src='file/add.png' style='height:12pt; width:12pt'/></a>";
	  echo "<input type='text' name='number' value='{$row['Number']}' onchange='javascript:location.href('login.php')' style='width:30px' maxlength='3' disabled/>";
	  echo "<a href='minusone.php?Product_Name={$row['Product_Name']}'><img src='file/minus.png' style='height:12pt; width:12pt'/></a>";
	  echo "</td><td align='center' align='center' class='tdfont'><a href='deletefromcart.php?id={$row['Product_Name']}'>�R��</a></td></tr>";
	  $total = $total + $row["Price"]*$row["Number"];
	}while($row = mysql_fetch_array($result));
	echo "<form name='submitorderform' method='post' action='submitorder.php'><tr valign='bottom'><td colspan='5' align='right' class='tdtotalpricefont'>�`����G�D{$total}&nbsp;&nbsp;&nbsp;&nbsp;</td></tr><tr><td colspan='5' align='left' class='thfont'>�e�f�a�}�G</td></tr><tr><td colspan='5' align='left'><textarea name='address' cols='70' rows='5'></textarea></td></tr><tr><td colspan='5' align='center'><input type='hidden' value={$total} name='totalprice'/><input type='submit' value='�T�{�I��'/></td></tr></form>";
}else{
	echo "<tr><td colspan='5' align='center' class='tdtotalpricefont'>�A���ʪ������ȮɨS���ӫ~</td></tr>";
	}
?>

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