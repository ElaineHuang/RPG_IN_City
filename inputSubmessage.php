<?php          date_default_timezone_set('Asia/Taipei');
               $con=mysql_connect("140.121.196.61","D20","database20");
               if (!$con)
               {
                die("Can't find MySQL");
               }
                mysql_query('SET NAMES UTF8');
                mysql_select_db("d20_project", $con);
                $name=$content='';
                $gid=$_POST['gid'];
                if($_SERVER["REQUEST_METHOD"] == "POST"){
        
                    $name=$_POST['name'];
                    $content=$_POST['comment'];
                    $datetime = date ("Y-m-d"); 
                    $sql="INSERT INTO suboard(gid,id,name,content,time) VALUES ('$gid',NULL,'$name','$content','$datetime')";
                    if (!mysql_query($sql))
                    {
                     die('Error:'.mysql_error());
                    }
					session_start();
					if(isset($_SESSION['logined']) && isset($_SESSION['admin'])) 
					{
						$subresult=mysql_query("SELECT id FROM suboard WHERE gid='$gid' and name='$name' and content='$content'") or die(mysql_error());
						if($subresult)
						{
                            while($row2 = mysql_fetch_array($subresult)){
                                if($row2!=null)
								{
                                 echo '<div class = "sub"><h4 class = "in"><a href = "delete_sub.php?id='.$row2[0].')"><img src = "images/delete.png" alt = images width = "25px"></a><span class="label label-warning">'.$name.'</span></h4>'.$content.'</div>';
							    } 
                            }
                       
                       }
					   else
					   {
                           echo'Error:'.mysql_error();
                       }
						
					}
					else
					{
						echo "<div class = 'sub'><h4 class = 'in'><span class='label label-warning'>".$name."</span></h4>".$content."</div>";
					}
                    }
                    mysql_close($con);
?>     