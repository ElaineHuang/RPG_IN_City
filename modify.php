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
			width: 50%;
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
	<div class = "orange">
	  <form name="login" id="login" action="checkpwd.php" method="post">
	  <?php
		if(isset($_SESSION['logined']))
		{
			$name = $_SESSION['membername'];
			echo '<p>'.$name.'已登入中...</p><br />';
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
		echo '<div class="col-md-7"><form  class="navbar-form navbar-left" name="information" id="information" action="update.php?account='.$row[0].'" method="post">
	  <div class="form-group">
		  <div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">個人資料</div>
		  <div class = "margin10">
		  <label>*使用者帳號：'.$row[0].'</label>
			<br />
		  <label>*姓名：</label>
		  <input name = "name" type="text" class="form-control" required="required" value = '.$row[2].'>
			<br />
		  <label>*生日:</label>
		  <input name = "birth" type="date" class="form-control" size = "30" required="required" value = '.$row[3].'>
			<br />
		  <label>*電話：</label>
		  <input name = "phone" type="text" class="form-control" size = "30" required="required" value = '.$row[4].'>
			<br />
		  <label>*email：</label>
		  <input name = "email" type="email" class="form-control" size = "30" required="required" value = '.$row[5].'>
			<br />
		  <label>目前無訂房記錄...</label>
			<br />
			<button type="submit" class="btn btn-primary">修改</button>
		  </div>
	  </div>
	</form></div>';
	}
	
	?>
    </div></div>
	
	<nav>
	  <ul class="pager">
		<li class="previous"><a href="login.php"><span aria-hidden="true">&larr;</span>上一頁</a></li>
	  </ul>
	</nav>
	
	<footer align = "center">
	<p>建議使用Chrome, Firefox, IE9開啟網頁</p>
	<p class="copyright">Copyright &copy; Site Built By ____</p>
	</footer>
  </body>
</html>