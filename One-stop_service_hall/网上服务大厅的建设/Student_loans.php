<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld" href="#" /><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>北京化工大学一站式平台</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<script src="ajax.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript">
window.onload=function ()
{
    var t=<?php echo $_GET['idd'];?>;
	var oDiv=document.getElementById('work');
	$("#now a").eq(t-1).css({"background-color":"#F39D01"});
	document.getElementById(t).style.display='block';
}
</script>

</head>
<body>
	
	<div class="head">
		<div class="head_top width">
			<?php
			session_start();mysql_query("set names utf8");//设置编码格式
				$arr=$_SESSION['userid'];
	        if( $_SESSION['username']=='') 
	        {
	        	echo"<script charset='utf-8'>alert('请登录');location.href='main.php'</script>";
	        }
			else
				echo "<a href='exit.php'><span style='float:right'>退出登录</span></a>"."<span style='float:right'>welcome!$arr</span>";
			?>
		</div>
		<div class="head_mid">
			<img src="css/img/head.jpg" style="width:100%;">
		</div>
		<div class="head_bom">
			<div class="nav width">
				<span class="nav_left">欢迎访问北京化工大学一站式服务平台</span>
				<a href="main.php?id=<?php echo $_SESSION['username']  ?> " class="nav_right1">返回大厅首页</a>
				<a href="wwww.buct.edu.cn"  class="nav_right2">返回北化官网</a>
			</div>
		</div>
	</div>

	<div class="main width">
		<div class="menu">
			<ul>
				<li><img src="css/img/1.png">
				    <ul>
				    <li><a href="Undergraduates_comprehensive_service.php?idd=1">数字校园</a></li>
				   	<li><a href="Undergraduates_comprehensive_service.php?idd=2">奖助学金补发办理</a></li>
		            <li><a href="Undergraduates_comprehensive_service.php?idd=3">补助及奖学金材料开具</a></li>
		            <li><a href="Undergraduates_comprehensive_service.php?idd=4">征兵入伍咨询</a></li>
		            <li><a href="Undergraduates_comprehensive_service.php?idd=5">成绩单打印</a></li>
				    </ul>
				</li>
				<img src="css/img/2.png">
				    <ul id="now">
		              <li><a href="Student_loans.php?idd=1">咨询与受理</a></li>
		              <li><a href="Student_loans.php?idd=2">毕业生还款办理</a></li>
		            </ul>
				
				<li><img src="css/img/6.png">
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


		<div id="work" style="float: right;width: 800px">
		<?php
				session_start();
				$username=$_SESSION['username'];
				$con = mysql_connect("localhost","root","123");
				if (!$con)
				{
				  die('Could not connect: ' . mysql_error());
				}
				mysql_query("set names utf8");//设置编码格式
				mysql_select_db('onestep-stage', $con);
				$check_query = mysql_query("SELECT * from login where username='$username' limit 1");
				if($result = mysql_fetch_array($check_query)){
				//登录成功
				$name= $result["name"];
				$num= $result["num"];
				$class= $result["class"];
				$tel= $result["tel"];

				} else {
				//    echo"连接出错";
				}
		?>
		<div id="1" style="display:none;">
				<div align="center" style="">
					<div style="float:left;border: 1px solid #c9c9c9;width:400px;" onlclick="">
							<div id="ttt" style="border-bottom: 1px solid #01a9fe;">
								<span>常见问题</span>
							</div>
							<div style="height:202px">
								<ul>
								<?php  
								$question=2;
								$database="zhu_consult";
								 $q="select * from zhu_consult where status=1";//设置查询指令
								 $result=mysql_query($q);//执行查询
								 $i=1;
								 while($i<8&&$row=mysql_fetch_assoc($result))//将result结果集中查询结果取出7条显示
								 {
								 	$t=$row["id"];
								  echo"<li style='text-align:left;width:400px;' onlclick=''><a href="."javascript:showResult($t,2,'$database')".">".$i++.".".$row["question"]."</a></li>";
								 }								 
				        		?>
				        		</ul>
							</div>
					</div>
					
					<div style="height:100px;width:390px;float:right">
						<div align="left" style="">
							<input style="width:300px;border: 1px solid #01a9fe;height:18px;" onkeup="showResult(document.getElementById('search').value,1,'zhu_consult')" id="search" type="text">
							<input style="" type="submit" id="submit" onclick="showResult(document.getElementById('search').value,1,'zhu_consult')" value="搜索答案">
						</div>
						<ul>
							<div id="livesearch" style="border: 1px solid #c9c9c9;height:200px;">	
							</div>
						</ul>
					</div>
					<div style="float:left;border: 1px solid #c9c9c9;width:798px;">
							<div id="ttt" style="border-bottom: 1px solid #01a9fe;border-right: 1px solid #01a9fe;float:left;width:100px;height:21px">
								<span>问题</span>
							</div>
							<ul>
								<div style="" id="question">
								</div>
							</ul>
					</div>
					<div style="float:left;border: 1px solid #c9c9c9;width:798px;" onlclick="">
							<div id="ttt" style="border-bottom: 1px solid #01a9fe;border-right: 1px solid #01a9fe;float:left;width:100px;height:21px">
								<span>解答</span>
							</div>
							<ul>
								<div style="" id="answer">
								</div>
							</ul>
					</div>
					<div style="float:left;border: 1px solid #c9c9c9;width:798px;height:172px">
							<div id="ttt" style="border-bottom: 1px solid #01a9fe;border-right: 1px solid #01a9fe;float:left;width:100px;height:21px">
								<span>我要提问</span>
							</div></br>
							<ul>
								<div style="height:100px;" id="question">
								<form action="post.php" method="post" action="return isempty()">
									<div style="float:left">问题描述</div>
									<textarea name="my_question" style="border:none" cols ="94" rows = "1"></textarea>
									<div style="float:left">具体内容</div>
									<textarea name="my_question_content" style="border:none" cols ="94" rows = "3"></textarea>	
									<input type="hidden" name="type" value="zhu_consult_my_question" />
									<div class="more"><input type="submit" id="submit" name="submit" value="提交"></div>
								</form>
									
								</div>
							</ul>
					</div>
				</div>
			</div>
			<div id="2" style="display:none;" align="center">
				<?php  
				 $q="select * from liuchenglei where id=1";//设置查询指令
				 $result=mysql_query($q);//执行查询
				 if($row=mysql_fetch_array($result))
				 {
				 	echo $row['name'];
				 	echo "<br>";
				 	echo $row['content'];
				 }
				 else
				 echo "暂未有数据";								 
        		?>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>

	<div class="footer">
		<p>Copyright@  北京化工大学</p>
		<p>地址：北京市朝阳区北三环东路15号 邮编：100029 Email：news@buct.edu.cn</p>
	</div>
</body>
</html>
