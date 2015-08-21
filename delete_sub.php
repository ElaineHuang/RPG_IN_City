<?php

	header('Content-Type: text/html; charset = utf-8');
	include("db_connect.php");
	$id=$_POST['subid'];
	if($id)
	{
	mysql_query("DELETE FROM `suboard` WHERE id = '{$id}'") or die("delete fail"); //刪除資料
	}
	else
	{
		$getid = $_GET['id'];
		mysql_query("DELETE FROM `suboard` WHERE id = '{$getid}'") or die("delete fail"); //刪除資料
		header("Location: guest.php");
	}
?>