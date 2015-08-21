<?php

	header('Content-Type: text/html; charset = utf-8');
	include("db_connect.php");
	$gid=$_POST['gid'];
	mysql_query("DELETE FROM `board` WHERE gid = '{$gid}'") or die("delete fail"); //刪除資料
	mysql_query("DELETE FROM `suboard` WHERE gid = '{$gid}'") or die("delete fail"); //刪除資料
	
?>