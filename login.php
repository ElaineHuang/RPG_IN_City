<?php
header("content-type:text/html;charset=utf-8");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>台南民宿</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/basic.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<style type="text/css">
	
	.col-md-12 {
		background-image: url(images/back.jpg);
	}
	
	.col-md-2 {
				padding: 10px;
				padding-bottom: 0px;
				box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);
				border: SlateGray 1px solid;
				margin: 10px;
			  }
	.orange {
				background: #ADD8E6;
				width: 100%;
				height: auto;
				border-radius: 10px;
				-moz-border-radius: 10px; /* Firefox */
				-webkit-border-radius: 10px; /* Safari and Chrome */
				behavior: url(ie-css3.htc); /* 使用ie-css3 */
				padding: 10px;
				padding-top: 20px;
			}
	
	input {
			margin: 5px;
			border-radius: 5px;
			-moz-border-radius: 5px; /* Firefox */
			-webkit-border-radius: 5px; /* Safari and Chrome */
		  }
	.btn {
			margin: 5px;
 		 }
		 
	form {
			 align: center;
			 text-align: center;
		 }
	.navbar-form { 
					width: 100%; 
					margin: 10px;
				 }
	.form-group { width: 100%; }
	.margin10 {
				margin: 10px;
			  }
			  
	form p {
				margin: 5px;
		   }

	@media screen and (min-width: 992px) and (max-width: 1200px) {
		footer {	
					position: relative;
					top: 50px;
				}
	}
	@media screen and (min-width: 768px) and (max-width: 992px) { 
	footer {	
					position: relative;
					top: 50px;
				}
		
	}
	
	@media screen and (min-width: 450px) and (max-width: 768px) { 
	footer {	
					position: relative;
					top: 50px;
				}
		
	}
	
	@media screen and (max-width: 450px) {
		footer {	
					position: relative;
					top: 50px;
				}
	}
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
	
	</script>
	
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">蔓波創意民宿</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">首頁</a></li>
                <li><a href="about.html">關於我們</a></li>
                <li><a href="room.html">客房介紹</a></li>
				<li><a href="public.html">公共空間</a></li>
				<li><a href="online.html">線上訂房</a></li>
				<li><a href="transport.html">交通指引</a></li>
				<li><a href="travel.html">景點介紹</a></li>
				<li><a href="guest.php">訪客留言</a></li>
				<li><a href="login.php">會員登入</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
	
	<div class = "row">
	<div class="col-md-12">
	</div>
	</div>
	
	<img class = "logo" src = "images/logo.png" alt="images">
	
	<div class = "row">
	<?php
	if(isset($_SESSION['logined']))
	{
		echo '<div class="col-md-3">';
	}
	else
	{
		echo '<div class="col-md-4 col-md-offset-4">';
	}
	?>
	<div align = "center"><img src = "images/login.png" alt="images" width="300px"></div>
	<?php
	if($_GET['join'])
	{
		echo "<p>恭喜你已成功加入會員囉!請登入</p>";
	}
	?>
	<div class = "orange">
	  <form name="login" id="login" action="checkpwd.php" method="post">
	  <?php
		if(isset($_SESSION['logined']))
		{
			$name = $_SESSION['membername'];
			echo '<p>'.$name.'已登入中...</p><br />';
			if(isset($_SESSION['admin']))
			{
				echo '<p>身分: 管理員</p>';
			}
			echo '<a href = "logout.php"><input type="button" value="登出" class="btn btn-primary" role="button"/></a>';
		}
		else
		{
			echo '<div>帳號:<input type="text" name = "account" size = "20" required="required"/></div><br />';
			echo '<div>密碼:<input type="password" name = "password" size = "20" required="required"/></div><br />';
			echo '<input type="submit" value="登入" class="btn btn-primary" role="button"/>';
			echo '<a href = "join.html"><input type="button" value="加入會員" class="btn btn-primary" role="button"/></a>';
			echo '<p>現在加入會員，送入住折價優惠券喔!!</p>';
		}
	  ?>
	  
	  </form>
	</div>
	</div>
	<?php
	if(isset($_SESSION['logined']))
	{
		$con=mysql_connect("140.121.196.61","D20","database20");
        if (!$con)
        {
            die("Can't find MySQL");
        }
        mysql_query('SET NAMES UTF8');
		mysql_select_db("d20_project", $con);
		$result = mysql_query("SELECT * FROM `member` WHERE name = '{$_SESSION['membername']}'");
		$row = mysql_fetch_array($result);
		$name = $_SESSION['membername'];
		echo '<div class="col-md-6"><form  class="navbar-form navbar-left" name="information" id="information" action="#" method="get">
	  <div class="form-group">
		  <div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">個人資料</div>
		  <div class = "margin10">
		  <label>*使用者帳號：'.$row[0].'</label>
			<br />
		  <label>*姓名：'.$row[2].'</label>
			<br />
		  <label>*生日:'.$row[3].'</label>
			<br />
		  <label>*電話：'.$row[4].'</label>
			<br />
		  <label>*email：'.$row[5].'</label>
			<br />
		  <label>目前無訂房記錄...</label>
			<br />
			<a href = "modify.php"><button type="button" class="btn btn-primary">修改</button></a>';
		if(isset($_SESSION['admin']))
		{
			echo '<a href = "admin.php"><button type="button" class="btn btn-primary">會員管理</button></a>';
		}
		echo '</div></div></form></div>';
	}
	
	?>
    </div>
	<?php
	if(isset($_SESSION['logined']))
	{
	echo '<div class="col-md-2">';
	echo '<form name="inputfile" id="inputfile" action="upload.php?name='.$_SESSION['membername'].'" method="post" enctype="multipart/form-data">';
	$pic = mysql_query("SELECT picture FROM `member` WHERE name = '{$_SESSION['membername']}'") or die("無法連進資料庫");
	$rowpic = mysql_fetch_array($pic);
	if($rowpic[0] != null)
	{
		echo '<img src = "images/'.$rowpic[0].'" alt = "images" width = "100%">';
	}
	else
	{
		echo '<img src = "images/mainpic.jpg" alt = "images" width = "100%">';
	}
	echo ' <div class="form-group">
			<input name="upfile" type="file" id="exampleInputFile">
			<button type="submit" class="btn btn-primary">更換大頭照</button>
		   </div>';
	echo '</form>';
	echo '</div>';
	
	}
	?>
	
	</div>
	
	<footer align = "center">
	<p>建議使用Chrome, Firefox, IE9開啟網頁</p>
	<p class="copyright">Copyright &copy; Site Built By ____</p>
	</footer>
  </body>
</html>