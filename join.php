<?php
	
	include("securimage/securimage.php");
	$img=new Securimage();
	$valid=$img->check($_POST['captcha_code']);//检查用户的输入是否正确
	if($valid==true) 
	{
	
		include("db_connect.php");
		$account = $_POST['account'];
		$checksql = "SELECT `account` FROM  `member`";
		$checkresult = mysql_query($checksql);
		if($checkresult)
		{
			$pass = 0;
			while($row = mysql_fetch_array($checkresult))
			{
				if($row[0] == $account)
				{
					mysql_free_result($checkresult);
					mysql_close($con);
					$pass = 1;
					echo "<meta charset='utf-8'>";
					echo "<script type='text/javascript'>";
					echo "alert('您的帳號已經有人使用囉!');";
					echo "history.back();";
					echo "</script>";
				}
			}
			
			if($pass == 0)
			{
				$sql = "INSERT `member` (account, password, name, birth, phone, email) VALUES ('{$_POST['account']}','{$_POST['password']}','{$_POST['name']}','{$_POST['birth']}','{$_POST['phone']}','{$_POST['email']}')";
				mysql_query($sql);
				/*$to = $_POST['email'];
				$subject = '啟用通知信';
				$body = $_POST['name'].'您好: 
				您的帳號'.$_POST['account'].'已經可以用囉!請使用您申請時輸入的帳密登入我們的網站。
				謝謝您的支持! 歡迎您光臨蔓波創意民宿喔!';
				$header = 'Content-type:text/plain;charset=UTF-8';
				$header .= "\nFrom: amy8342257@yahoo.com";
				mb_internal_encoding("UTF-8");
				$subject = mb_encode_mimeheader($subject, 'UTF-8');
				mail($to, $subject, $body, $header);*/
				
				header("Location: login.php?join=1");
			}
		}
		else
		{
			echo'Error:'.mysql_error();
		}
	} 
	else
	{
	    echo "<meta charset='utf-8'>";
		echo "<script type='text/javascript'>";
		echo "alert('驗證碼錯誤，請再試一次');";
		echo "history.back();";
		echo "</script>";
	}
	
?>