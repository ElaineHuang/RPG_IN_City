
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
	
	form {
			border: SlateGray 1px solid;
			box-shadow:4px 4px 3px rgba(20%,20%,40%,0.5);
			padding: 25px;
			margin: 10px;
			
		 }
		 
	#name {
			width: 200px;
		  }
		  
	.radiobtn {
				margin: 15px;
			  }
			  
	.po {
			width: 200px;
			height: 40px;
			color: black;
			
		}
	.po1 {
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFB6CE), to(#DC143C));
			background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#FFB6CE), to(#DC143C));
			background: -moz-linear-gradient(center top, #FFB6CE, #DC143C);
			background: linear-gradient(#FFB6CE, #DC143C);
			color: white;
			color: black \9; 
		 }
	.po2 {
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#00FF7F), to(#008000));
			background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#00FF7F), to(#008000));
			background: -moz-linear-gradient(center top, #00FF7F, #008000);
			background: linear-gradient(#00FF7F, #008000);
			color: white;
			color: black \9; 
		 }
		 
	.po3 {
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
			background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
			background: -moz-linear-gradient(center top, #0096FF, #005DFF);
			background: linear-gradient(#0096FF, #005DFF);
			color: white;
			color: black \9; 
		 }
		 
	@media screen and (min-width: 992px) and (max-width: 1200px) {
		
	}
	@media screen and (min-width: 768px) and (max-width: 992px) { 
	
	
	}
	
	@media screen and (min-width: 450px) and (max-width: 768px) { 
	
	}
	
	@media screen and (max-width: 450px) {
	
	}
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
	 $(document).ready(function(){
	 
		  $( "input[type=radio]" ).on( "click", function() {
			if($('#inlineRadio1').is(':checked'))
			{
				$( "form" ).css( "background", "#FFF0F5" );
				$( "#message" ).removeClass().addClass("po po1");
			}
			else if($('#inlineRadio2').is(':checked'))
			{
				$( "form" ).css( "background", "#90EE90" );
				$( "#message" ).removeClass().addClass("po po2");
			}
			else
			{
				$( "form" ).css( "background", "#ADD8E6" );
				$( "#message" ).removeClass().addClass("po po3");
			}
		  });
		  
		var captcha={};
		captcha.codeImg=$('*#captcha');
		captcha.reloadCode=function(e){
		 e.preventDefault();
		 captcha.codeImg.prop({src:'securimage/securimage_show.php?fake='+Math.random()});
		};
		$('<br /><button type="button">更換提示碼</button>').insertAfter(captcha.codeImg).on('click.boo',captcha.reloadCode);
			  
	  });
	 function check_data()
	 {
		if (document.main_message.name.value.length == 0)
        {
          alert("「姓名」一定要填寫哦...");
          return false;
        }
        if (document.main_message.title.value.length == 0)
        {
          alert("「主題」一定要填寫哦...");
          return false;
        }
		main_message.submit();	
	 }
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
	
	<div align = "center"><img src = "images/guest.png" alt="images" width = "300px"></div>	
	
	<div class = "row">
	<div class="col-md-8 col-md-offset-2" >
	
	<form name = "main_message" role="form" action="mainstore.php" method="post">
	  <div class="form-group">
		<label>姓名</label>
		<input type="text" class="form-control" name="name" placeholder="name" required="required" >
	  </div>
	  <div class = "radiobtn">
	    <label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Q"> 問題
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="S"> 建議
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="M" checked = "true"> 心情
		</label>
	  </div>
	  <div class="form-group">
		<label>主題</label>
		<input type="text" class="form-control" name="title" placeholder="title" required="required">
	  </div>
	  <div class="form-group">
		<label>內容</label>
		<textarea class="form-control" rows="3" name = "message"></textarea>
	  </div>
	  <div class="form-group">
	  <label for="captcha_code">驗證碼：</label><br />
	  <input type="text" id="captcha_code" name="captcha_code" placeholder="輸入提示的文字" maxlength="7"><br />
	  <img src="securimage/securimage_show.php" id="captcha" alt="驗證圖碼">
	  </div>
	  <div align = "center"><button type="button" class="po" onClick="check_data()">我要留言</button></div>
	  
	</form>
	</div>	
    </div>	
	
	<nav>
	  <ul class="pager">
		<li class="previous"><a href="guest.php"><span aria-hidden="true">&larr;</span>上一頁</a></li>
	  </ul>
	</nav>
	<footer align = "center">
	<p>建議使用Chrome, Firefox, IE9開啟網頁</p>
	<p class="copyright">Copyright &copy; Site Built By ____</p>
	</footer>
  </body>
</html>