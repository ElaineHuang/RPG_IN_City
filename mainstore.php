<?php
    date_default_timezone_set('Asia/Taipei');
     include("securimage/securimage.php");
	 $img=new Securimage();
	 $valid=$img->check($_POST['captcha_code']);//检查用户的输入是否正确
	 
	 if($valid==true) {
	   $con=mysql_connect("140.121.196.61","D20","database20");
        if (!$con)
        {
            die("Can't find MySQL");
        }
        mysql_query('SET NAMES UTF8');
        mysql_select_db("d20_project", $con);
		$name=$title=$content=$type='';
        
            $name=$_POST['name'];
            $title=$_POST['title'];
            $content=$_POST['message'];
            $type=$_POST['inlineRadioOptions'];
            $datetime = date ("Y-m-d"); 
			$sql="INSERT INTO board(gid,name,title,content,style,time) VALUES (NULL,'$name','$title','$content','$type','$datetime')";//資料庫:A_I為auto incement(自動增加)
			if (!mysql_query($sql))
			{
			 die('Error:'.mysql_error());
			}
			mysql_close($con);
			header("Location: guest.php");
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