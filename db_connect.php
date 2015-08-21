<?php
	$con=mysql_connect("140.121.196.61","D20","database20")
	  or die("無法建立資料連接:" . mysql_error()); 
	mysql_query("SET NAMES utf8");
    mysql_select_db("d20_project", $con)
      or die("開啟資料庫失敗:" . mysql_error($con));
?>