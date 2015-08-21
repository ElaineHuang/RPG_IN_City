<?php
	header("content-type:text/html;charset=utf-8");
	$upload_dir = './images/';
	if(!empty($_FILES['upfile']))
	{
	if($_FILES['upfile']['error'] == UPLOAD_ERR_OK)
	{
		
		include("db_connect.php");
		if(file_exists("images/".$_FILES['upfile']['name']))
		{
			mysql_query("UPDATE `member` SET picture='{$_FILES['upfile']['name']}' WHERE name = '{$_GET['name']}'") or die("無法存進資料庫");
			echo "<meta charset='utf-8'>";
			echo "<script type='text/javascript'>";
			echo "alert('檔案已經存在，請勿上傳相同檔案');";
			echo "history.back();";
			echo "</script>";
		}
		else
		{
		if(move_uploaded_file($_FILES['upfile']['tmp_name'], "$upload_dir/".$_FILES['upfile']['name']) or die("失敗"))
		{
			
			mysql_query("UPDATE `member` SET picture='{$_FILES['upfile']['name']}' WHERE name = '{$_GET['name']}'") or die("無法存進資料庫");
			header("Location: login.php");
		}
		}
	}
	else
	{
		echo "<meta charset='utf-8'>";
		echo "<script type='text/javascript'>";
		echo "alert('上傳失敗');";
		echo "history.back();";
		echo "</script>";
		
	}
	}
	else 
	{
		echo "<meta charset='utf-8'>";
		echo "<script type='text/javascript'>";
		echo "alert('檔案是空的!');";
		echo "history.back();";
		echo "</script>";
	}
?>