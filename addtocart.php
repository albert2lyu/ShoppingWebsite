<meta http-equiv="Content-Type" content="text/html; charset=big5">
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

mysql_select_db($database_connQuestion, $connQuestion);
$selectquery = "SELECT Number FROM cart WHERE Product_Name = '{$_POST["bookname"]}' AND Client_Mail = '{$_SESSION['account_name']}'";
$result = mysql_query($selectquery, $connQuestion) or die(mysql_error());
$row_count = mysql_num_rows($result);

if($row_count != 0){
$error_message="���ӫ~�w�s�b�A���ʪ������A���A�K�[�I";
echo "<script language=javascript>
       alert('$error_message') ;
       self.history.go(-1) ;
      </script>";
}else{
$insertcartquery = "INSERT INTO `cart` VALUES ('{$_POST["bookname"]}', '{$_SESSION['account_name']}', 1) ";
mysql_query($insertcartquery, $connQuestion);
$accomplish_message="�w�[�J�ʪ����I";
echo "<script language=javascript>
       alert('$accomplish_message') ;
       self.history.go(-1) ;
      </script>";
}
?>