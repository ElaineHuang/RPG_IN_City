<?php
	header('Content-Type: text/html; charset = utf-8');
	include("db_connect.php");
	
	if($_GET['del'])
	{
	 $del = mysql_query("DELETE FROM `member` WHERE account = '{$_GET['del']}'"); //刪除資料
	 
	 if($_GET['del'] == "admin")
	 { 
		session_start();
		session_unset();
		header("Location: login.php");
	 }
	 else	 
	 {
		header("Location: admin.php");
	 }
	}
	
?>