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
?>
<?php
mysql_select_db($database_connQuestion, $connQuestion);
$deletecartquery = "DELETE FROM `cart`
WHERE Product_Name = '{$_GET['id']}' AND Client_Mail = '{$_SESSION['account_name']}'";
mysql_query($deletecartquery, $connQuestion);
$deleting_message="�w�R���Ӫ��~�I";
echo "<script language=javascript>
       alert('$deleting_message') ;
       self.history.go(-1) ;
      </script>";
?>