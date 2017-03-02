
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><!--html标准-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Cache-Control" content="no-siteapp" /><!--//转码-->
<link rel="alternate" media="handheld" href="#" /><!--//文档替代版-->
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><!--字符集-->
<title>北京化工大学一站式平台</title>
<link rel="stylesheet" type="text/css" href="css/style2.css"><!--引用css文件-->
<script type="text/javascript" src="js/jquery.js"></script><!--引用jquery文件-->
<script type="text/javascript"> var fun = jQuery.noConflict(true);</script><!--定义轮换图所用变量-->
<script type="text/javascript" src="js/main_mid.js"></script><!--引用js文件-->
<script type="text/javascript" src="js/check.js"></script><!--引用js文件-->
<script type="text/javascript">
	<!--运行轮换图片函数-->
	fun(function() {
        fun("#pic_show").picShow();
});
</script>


</head>
<body>
	<!--网页背景图片-->

	<!--弹出登录窗的遮罩 -->
	<div id="zhezhao" style="position:absolute;z-index:1;width:100%;height:100%;background-color:silver;display:none;opacity:.6;"></div>
	<!--头部-->
	<div class="head">
		<div class="head_top width">
		<!--存储登录用户名-->
		<?php
		// echo date('Y/m/d');
			session_start();
			$arr=$_SESSION["userid"];
	        if( $_SESSION['username']=='')
	        {
	        	echo"<a href='login.php?right=-1'><span style='float:right'>访客</span></a>";
	      	    echo"<a href='javascript:showLogin()'><span style='float:right'>登录</span></a>";
	        }
			else
			{
				if($_SESSION['username'][6]==4)
				{
					echo "<script>document.getElementById('yan').style.display:none</script>";
					echo "<a href='exit.php'><span style='float:right'>退出登录</span></a>"."<span style='float:right'>welcome 本科生!$arr</span>";
				}else
				if($_SESSION['username'][6]==5)
				{
					echo "<a href='exit.php'><span style='float:right'>退出登录</span></a>"."<span style='float:right'>welcome 研究生!$arr</span>";
				}else
				echo "<a href='exit.php'><span style='float:right'>退出登录</span></a>"."<span style='float:right'>welcome! $arr</span>";
			}
		?>
		</div>

		<div class="head_mid">
			<img src="css/img/head.jpg" style="width:100%;">
		</div>
		<div class="head_bom">
			<div class="nav width">
				<span class="nav_left">欢迎访问北京化工大学一站式服务平台</span>
				<a href="#" class="nav_right1">返回大厅首页</a>
				<a href="http://www.buct.edu.cn/"  class="nav_right2">返回北化官网</a>
			</div>
		</div>
	</div>
	
	<div id="loginDiv" style="width:300px;height:230px;">
	    <div id="login_title">
	     <img src="css/img/close.png" style="float:right;margin-top:10px;margin-right:10px;" onclick="hidLogin()"/>
	    </div>
   		<ul style="margin-top:20px;font-family:Arial, Helvetica, sans-serif;">
			<form id="check" name="login" action="login.php" method="post" onsubmit="return confirm()">
				<li><input type="text" id="username" name="username" onblur="checkna()" placeholder="username"><span id="divname">*</span></li>
				<li><input type="password" id="password" name="password" onblur="javascript:checkpsd1()" placeholder="password"><span id="divpassword1">*</span></li>
				<li><span id="c" style="display:none" class="tips_false">输入不合法</span></li>
				<li><input type="submit" id="login"  value="登录"></li>
			</form>
		</ul>
	</div>
	<!--内容部分-->

	<div class="main width">
		<!--内容部分左侧-->
		<div class="main_left">
				<div class="menu">
					<ul>
					<li><img src="css/img/1.png">
					    <ul>
					    <li><a href="Undergraduates_comprehensive_service.php?idd=1" title="数字校园">银行卡 一卡通 班车</a></li>
					   	<li><a href="Undergraduates_comprehensive_service.php?idd=2">奖助学金补发办理</a></li>
			            <li><a href="Undergraduates_comprehensive_service.php?idd=3">补助及奖学金材料开具</a></li>
			            <li><a href="Undergraduates_comprehensive_service.php?idd=4">征兵入伍咨询</a></li>
			            <li><a href="Undergraduates_comprehensive_service.php?idd=5">成绩单打印</a></li>
					    </ul>
					</li>
					<li><img src="css/img/2.png">
					    <ul>
			              <li><a href="Student_loans.php?idd=1">咨询与受理</a></li>
			              <li><a href="Student_loans.php?idd=2">毕业生还款办理</a></li>
			            </ul>
					</li>
					<li id="yan"><img src="css/img/6.png">
			            <ul>
			          	  <li><a href="Graduate_student_services.php?idd=1">成绩单打印</a></li>
			              <li><a href="Graduate_student_services.php?idd=2">报考培养和学位问题咨询</a></li>
			              <li><a href="Graduate_student_services.php?idd=3">宿舍变更</a></li>
			              <li><a href="Graduate_student_services.php?idd=4">教室借用手续办理</a></li>   
			              <li><a href="Graduate_student_services.php?idd=5">证明材料开具</a></li> 
			            </ul>
			          </li>
					<li><img src="css/img/3.png">
			            <ul>
			            	<li><a href="Group_learning.php?idd=1">学生活动场地申请</a></li>
		              		<li><a href="Group_learning.php?idd=2">文化活动咨询、门票发放</a></li>  
			            </ul>
			          </li>
			          <li><img src="css/img/4.png">
			            <ul>
			          		<li><a href="Academic_development_consulting.php?idd=1">预约问题解答</a></li>    
			            </ul>
			          </li>
			          <li><img src="css/img/5.png">
			            <ul>
			              <li><a href="Teaching_management_service.php?idd=1">四六级证明补办</a></li>
			              <li><a href="Teaching_management_service.php?idd=2">在校证明开具</a></li>
			              <li><a href="Teaching_management_service.php?idd=3">学籍证明办理</a></li>
			            </ul>
			          </li>
			          <li><img src="css/img/7.png">
			            <ul>
			              <li><a href="library.php?idd=1">图书馆借阅</a></li>
			            </ul>
			          </li>
					</ul>
				</div>
			</div>
		<!--内容部分中央-->
		<div class="main_mid"  id="pic_show">
			<div class="border img_area">
				<a href="#" style="cursor:default"><img src="" width="579" height="456"  border="0"/></a>
			</div>

			<div class="pic_title"  style="display:none;" >
				<a href="#" class="pic_title_a"></a>
			</div>
			<!--轮换图-->
			<div class="pic_btn">
				<ul class="pic_btn_ul">
					<li><span  xsrc="css/img/medle1.jpg" xtitle="1"  xhref="javascript:void(0);">1</span></li>
					<li><span  xsrc="css/img/medle2.jpg" xtitle="2"  xhref="javascript:void(0);">2</span></li>
					<li><span  xsrc="css/img/medle3.jpg" xtitle="3"  xhref="javascript:void(0);">3</span></li>
			     	<li><span  xsrc="css/img/medle4.jpg" xtitle="4"  xhref="javascript:void(0);">4</span></li>
			     	<li><span  xsrc="css/img/medle5.jpg" xtitle="5"  xhref="javascript:void(0);">5</span></li>
				</ul>
			</div>
     	</div>
		<!--内容部分右侧-->
		<div class="main_right" >
			<div class="main_right_border1">
				<div class="main_right_border2">
					<span>通知公告</span>
					<a href="#">更多</a>
				</div>
				<div class="content">
					<div id="rollDiv1" style="height:95px;overflow: hidden;zoom: 1;">
				        <ul>
				        	<?php  
				        		$link=mysql_connect('localhost','root','123')or die("数据库连接失败");
								 //连接数据库
								 mysql_select_db('onestep-stage',$link);//选择数据库
								 mysql_query("set names utf8");//设置编码格式  
								 	$q="select * from dongtai";//设置查询指令
								 $result=mysql_query($q);//执行查询
									 $i=1;
									 while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
									 {
									  echo"<li><a href=''>".$i++.".".$row["tittle"]."</a></li>";
									 }								 
				        	?>

				        </ul>
				    </div>
				</div>
			</div>

            <div class="main_right_border1" style="margin-top:10px">
				<div class="main_right_border2">
					<span><?php if( $_SESSION['username']=='')
							{
								echo "工作";
							}
							else
								echo "个人";
					 ?>动态</span>
					<a href="#">更多</a>
				</div>
				<div class="content">
					<div id="rollDiv2" style="height:95px;overflow: hidden;zoom: 1;">
				        <ul>
				        	<?php  
								 if( $_SESSION['username']=='')
								 {
								 	$q="select * from dongtai";//设置查询指令
								 $result=mysql_query($q);//执行查询
									 $i=1;
									 while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
									 {
									  echo"<li><a>".$i++.".".$row["tittle"]."</a></li>";
									 }
								 }
								else
								{
									$q="select * from news";//设置查询指令
									 $result=mysql_query($q);//执行查询
									 $i=1;
									 while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
									 {
									  echo"<li><a>".$i++.".".$row["tittle"]."</a></li>";
									  
									 }
								}
								 
				        	?>

				        </ul>
				    </div>
				</div>
			</div>
				
			<div class="main_right_border1" style="margin-top:10px">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return isempty()">
				<div class="main_right_border2"><span>意见与反馈</span></div>
				<div class="content" style="height:75px;">
						<textarea id="suggestion" name="suggestion" cols ="24" rows = "5" style="border: #888888 1px solid;border-radius: 3px;"></textarea>
				</div>
				<input type="hidden" name="action" value="submitted" />
				<div class="more"><input type="submit" id="submit" name="submit" value="提交"></div>
				</form>
			</div>
			<?php
				if (isset($_POST['action']) && $_POST['action'] == 'submitted')
				  {
					$qid = mysql_query("select count(*) as total from suggestion ");
					$res = mysql_fetch_array($qid);
					$count = $res['total'];
				    $suggestion=$_POST['suggestion'];
				   	$time=date('y-m-d h-m');
				   	$username=$_SESSION['username'];
				   	if($_SESSION['username']=='')
				   		$username='访客';
				   	$count++;
					$check = mysql_query("insert into suggestion(id,suggestion,username,time) values ('$count','$suggestion','$username','$time')");
					if($check)
					  echo "<script>alert('提交成功')</script>";
					else
					  echo "<script>alert('提交失败')</script>";
				  }
				?>
            <!--<div class="call"><a href="javascript:showLogin()">意见与反馈</a></div><div class="clear"></div>-->
		</div>
		<div class="clear"></div>
	</div>
	<!--页脚-->
	<div class="footer">
		<p>Copyright@  北京化工大学</p>
		<p>地址：北京市朝阳区北三环东路15号| 邮编：100029| Email：news@buct.edu.cn</p>
	</div>
</body>
</html>
