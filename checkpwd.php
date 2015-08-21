<?php
  require_once("db_connect.php");

  //取得表單資料
  $account = $_POST["account"]; 	
  $password = $_POST["password"];
					
  //檢查帳號密碼是否正確
   $sql ="SELECT * FROM `member` WHERE account = '$account' AND password = '$password'";
   $result = mysql_query($sql);
   $row = mysql_fetch_array($result);
  //如果帳號密碼錯誤
  if (mysql_num_rows($result) == 0)
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result);
	
    //關閉資料連接	
    mysql_close($con);		

    //顯示訊息要求使用者輸入正確的帳號密碼
	echo "<meta charset='utf-8'>";
    echo "<script type='text/javascript'>";
    echo "alert('帳號密碼錯誤，請查明後再登入');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號密碼正確
  else
  {
	session_start();
	$_SESSION['logined'] = TRUE;
	$_SESSION['membername'] = $row[2];
	
	if($account == "admin" && $password=="php")
	{
		$_SESSION['admin'] = TRUE;
	}
	
	mysql_close($con);
	header("location:login.php?name={$row[2]}");
  }
?>
