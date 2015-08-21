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
	.in {
			display: inline;
		}
		
	hr {
		  -moz-border-bottom-colors: none;
		  -moz-border-image: none;
		  -moz-border-left-colors: none;
		  -moz-border-right-colors: none;
		  -moz-border-top-colors: none;
		  border-color: #EEEEEE -moz-use-text-color #FFFFFF;
		  border-style: solid none;
		  border-width: 1px 0;
		  margin: 18px 0;
		}
		
	input {
			margin-left: 5px;
			margin-top: 10px;
		  }
		  
	textarea {
				width: 100%;
				height: 70px;
			 }
			 
	form {
			background: #ADD8E6;
			padding: 20px;
			border-radius: 20px;
			-moz-border-radius: 10px; /* Firefox */
			-webkit-border-radius: 10px; /* Safari and Chrome */
			behavior: url(ie-css3.htc); /* 使用ie-css3 */
			width: 60%;
		 }
	
	.formred {
				background: #FFCCFF;
			}
			
	.formgreen {
				background: #90EE90;
			  }
	.po {
			width: 300px;
			height: 40px;
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
			background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
			background: -moz-linear-gradient(center top, #0096FF, #005DFF);
			background: linear-gradient(#0096FF, #005DFF);
		}
	.sub {
			margin: 10px;
		 }	
	@media screen and (min-width: 992px) and (max-width: 1200px) {
		
	}
	@media screen and (min-width: 768px) and (max-width: 992px) { 
	
	
	}
	
	@media screen and (min-width: 450px) and (max-width: 768px) { 
	form {
			width: 100%;
		 }
	}
	
	@media screen and (max-width: 450px) {
	form {
			width: 100%;
		 }
	}
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	
	function main_message(name, style, title, content, panel_ID, time1, time2)
	{  
            var message="";
            if(style == "M"){
                 message = '<div class = "panel panel-info" id = "main_'+panel_ID+'"><div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#'+panel_ID
		+'"><table width = "101%"><td width = "71%">'+title+'</td><td width = "10%">'+name+'</td><td width = "10%">'+time1+'</td><td width = "10%">'+time2+
		'</td></tr></table></a></div><div id='+panel_ID+' class="panel-collapse collapse"><div class="panel-body"><p><span class = "fix'+panel_ID+'"></span>'+content+'</p> <hr /> <div id="'+panel_ID+"-"+panel_ID+'"></div> <div align = "center"><form name = "respond" id="'+title+'" action="JavaScript:inputSubMessage('+panel_ID+','+title+')" method="post"><div align = "left"><input type="hidden" name="gid" id="gid" value="'+panel_ID+'"><div>姓名:<input name = "name" type="text" id = "name" size = "20" required="required"/></div><br /><div>內容:<br /><textarea name="comments" id="comments" required="required"></textarea></div><div id="'+panel_ID+'"></div> <div align = "center"><input type="submit" value="我要回應" class="btn btn-primary" role="button"/></div></div></form></div></div></div></div>'
            }else if(style == "Q"){
                 message = '<div class = "panel panel-danger id = "main_'+panel_ID+'"><div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#'+panel_ID
		+'"><table width = "101%"><td width = "71%">'+title+'</td><td width = "10%">'+name+'</td><td width = "10%">'+time1+'</td><td width = "10%">'+time2+
		'</td></tr></table></a></div><div id='+panel_ID+' class="panel-collapse collapse"><div class="panel-body"><p><span class = "fix'+panel_ID+'"></span>'+content+'</p><hr /> <div id="'+panel_ID+"-"+panel_ID+'"></div> <div align = "center"><form name = "respond" id="'+title+'" class="formred" action="JavaScript:inputSubMessage('+panel_ID+','+title+')" method="post"><div align = "left"><input type="hidden" name="gid" id="gid" value="'+panel_ID+'"><div>姓名:<input name = "name" type="text" id = "name" size = "20" required="required"/></div><br /><div>內容:<br /><textarea name="comments" id="comments" required="required"></textarea></div> <div align = "center"><input type="submit" value="我要回應" class="btn btn-danger" role="button"/></div></div></form></div></div></div></div>'
            }else{
                message = '<div class = "panel panel-success id = "main_'+panel_ID+'"><div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#'+panel_ID
		+'"><table width = "101%"><td width = "71%">'+title+'</td><td width = "10%">'+name+'</td><td width = "10%">'+time1+'</td><td width = "10%">'+time2+
		'</td></tr></table></a></div><div id='+panel_ID+' class="panel-collapse collapse"><div class="panel-body"><p><span class = "fix'+panel_ID+'"></span>'+content+'</p><hr /> <div id="'+panel_ID+"-"+panel_ID+'"></div> <div align = "center"><form name = "respond" class = "formgreen" id="'+title+'" action="JavaScript:inputSubMessage('+panel_ID+','+title+')" method="post"><div align = "left"><div>姓名:<input name = "name" type="text" id = "name" size = "20" required="required"/></div><br /><input type="hidden" name="gid" id="gid" value="'+panel_ID+'"><div>內容:<br /><textarea name="comments" id="comments" required="required"></textarea></div> <div align = "center"><input type="submit" value="我要回應" class="btn btn-success" role="button"/></div></div></form></div></div></div></div>'
            }
	    document.getElementById( 'add' ).innerHTML+= message;
		
		var admin = <?php if(isset($_SESSION['admin'])){ echo $_SESSION['admin']; }else{ echo 'False'; }?>;
		if(admin)
		{
			$(".fix"+panel_ID ).html('<a href = "JavaScript:delete_main('+panel_ID+')"><img src = "images/delete.png" alt = images width = "25px"></a>');
		}
	}
	
	function inputSubMessage(id,form)
	{
           console.log("go inputSUBmessage");
          var xmlhttp;
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
        else
            {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
			
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                document.getElementById(id+"-"+id).innerHTML+=xmlhttp.responseText; //responseXLM別用~常有問題
                }
            }
        
            
            var gid=form.gid.value;
            var name=form.name.value; 
            var con=form.comments.value;
            console.log(gid+','+con+','+name);
            xmlhttp.open("POST","inputSubmessage.php",true);
            var text="gid="+gid+"&name="+name+"&comment="+con;
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send(text); //固定形式
            form.reset();
          
          
    }
	
	function subMessage(sname,scontent,sid)
	{
	   console.log("go SUBmessage");
	   var res = sid.split("-");
	   var ssid = res[0] + "-" + res[1];
	   document.getElementById(ssid).innerHTML+='<div id = "sub_'+res[2]+'" class = "sub"><h4 class = "in"><span class = "fix_sub'+sid+'"></span><span class="label label-warning">'+sname+'</span></h4>'+scontent+'</div>';
	   
	   var admin = <?php if(isset($_SESSION['admin'])){ echo $_SESSION['admin']; }else{ echo 'False'; }?>;
		if(admin)
		{
			$(".fix_sub"+sid).html('<a href = "JavaScript:delete_sub('+res[2]+')"><img src = "images/delete.png" alt = images width = "25px"></a>');
		}
	}
      
	function delete_main(panel_ID)
	{
		
		var xmlhttp;
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
        else
            {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
			
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                document.getElementById("main_"+panel_ID).style.display = "none";
                }
            }
		
		xmlhttp.open("POST","delete_main.php",true);
		var text="gid="+panel_ID;
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(text); //固定形式
	}
	
	function delete_sub(sid)
	{
		var xmlhttp;
		
        if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
        else
		{// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("sub_"+sid).style.display = "none";
			}
		}
		
		xmlhttp.open("POST","delete_sub.php",true);
		
		var text="subid="+sid;
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(text); //固定形式
		
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
	
	
    <div class="panel-group" id="accordion">
	
        <div class="panel panel-info">
		<table class = "table table-hover">
		<tr class="defalt"><td width = "70%">主題</td><td width = "10%">留言者</td><td width = "10%">張貼日期</td><td width = "10%">至頂訊息</td></tr>
		</table>
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				<table width = "101%">
				<td width = "71%">關於留言版</td><td width = "10%">小編</td><td width = "10%">2014-11-15</td><td width = "10%"></td></tr>
				</table>
				</a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>大家好，歡迎各位來到訪客留言版，歡迎各位隨時寫下您的心情、建議與問題，我們會隨時回應您的需求，與改進我們的不足之處，並歡迎您再次光臨蔓波創意民宿喔!</p>
					
                </div>
            </div>
        </div>
		<br/>
            <div id="add"></div>
        <?php
        $con=mysql_connect("140.121.196.61","D20","database20");
        if (!$con)
        {
            die("Can't find MySQL");
        }
        mysql_query('SET NAMES UTF8');
		mysql_select_db("d20_project", $con);
            $result = mysql_query("SELECT * FROM board ORDER BY board.gid DESC");
                 while($row = mysql_fetch_array($result))
                {  $name=$row['name'];
                   $title=$row['title'];
                   $time=$row['time'];
                   $index=$row['gid'];
                   $content=$row['content'];
                   $style=$row['style'];
                  echo "<script type='text/javascript'>main_message('".$name."','".$style."','".$title."','".$content."','".$index."','".$time."','".$time."');</script>";
                   
                       $subresult=mysql_query("SELECT * FROM suboard WHERE gid='$index'");
                       
                       if($subresult){
                           
                            while($row2 = mysql_fetch_array($subresult)){
                                if($row2!=null){
                                    $ssname=$row2['name'];
                                    $sscontent=$row2['content'];
									$ssid=$row2['id'];
                                    echo "<script type='text/javascript'>subMessage('".$ssname."','".$sscontent."','".$index."-".$index."-".$ssid."');</script>";
                                } 
                            }
                       
                       }else{
                           echo'Error:'.mysql_error();
                       }
                
                }
                
            ?>

    </div>
	</div>	
	</div>
	
	<div align = "center"><a href = "guest_message.php"><button type="button" class="btn btn-primary po">我要留言</button></a></div>
	
	<footer align = "center">
	<p>建議使用Chrome, Firefox, IE9開啟網頁</p>
	<p class="copyright">Copyright &copy; Site Built By ____</p>
	</footer>
  </body>
</html>