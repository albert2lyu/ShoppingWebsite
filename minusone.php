<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php
if(!isset($_GET["Product_Name"])||!isset($_SESSION['account_name'])){
	$ERROR_MESG="�Цb�ʪ����ɭ��ާ@�I";
     echo "<script language=javascript>
            alert('$ERROR_MESG');
			window.location.href='cart.php';
          </script>";
}else{

require_once('Connection/ConnectToDatabase.php');
mysql_select_db($database_connQuestion, $connQuestion);

$selectquery = "SELECT Number FROM cart WHERE Product_Name = '{$_GET["Product_Name"]}' AND Client_Mail = '{$_SESSION['account_name']}'";
$result = mysql_query($selectquery, $connQuestion) or die(mysql_error());
$row = mysql_fetch_array($result);
if($row['Number'] == 1){
$ERROR_MESG="�z���ӫ~�ƶq�w�F�U���I�p�G�A�Q�R�����ӫ~�A�Ы����R������";
echo "<script language=javascript>
		alert('$ERROR_MESG') ;
        window.location.href='cart.php';
      </script>";		
}else{
$updateaddone = "UPDATE cart SET Number = Number - 1 WHERE Product_Name = '{$_GET["Product_Name"]}' AND Client_Mail = '{$_SESSION['account_name']}'";
mysql_query($updateaddone, $connQuestion);

echo "<script language=javascript>
        window.location.href='cart.php';
      </script>";
}
}
?>