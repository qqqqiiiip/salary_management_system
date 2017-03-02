<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld" href="#" /><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>北京化工大学一站式平台</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<script src="ajax.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
window.onload=function ()
{
    var t=<?php echo $_GET['idd'];?>;
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
				<li><img src="css/img/2.png">
				    <ul>
		              <li><a href="Student_loans.php?idd=1">咨询与受理</a></li>
		              <li><a href="Student_loans.php?idd=2">毕业生还款办理</a></li>
		            </ul>
				</li>
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
		          <img src="css/img/5.png">
		            <ul id="now">
		              <li><a href="Teaching_management_service.php?idd=1">四六级证明补办</a></li>
		              <li><a href="Teaching_management_service.php?idd=2">在校证明开具</a></li>
		              <li><a href="Teaching_management_service.php?idd=3">学籍证明办理</a></li>
		            </ul>
		          <li><img src="css/img/7.png">
		            <ul>
		              <li><a href="library.php?idd=1">图书馆借阅</a></li>
		            </ul>
		          </li>
			</ul>
		</div>


		<div id="work" style="float: right;width: 800px">
			<div id="1" style="display:none;" align="center">
				<form action="post.php" method="post">
				<select style="width:155px;margin-top:100px" name="c_or_e">
		        	<option value="1">四级证明</option>
				    <option value="2">六级证明</option>			      	 
				</select>
					<input type="hidden" name="type" value="slj_print" />
					<input type="submit" id="submit" name="submit" value="确认开具">
				</form>
				<div style="margin-top:50px">
					确认之前请确认是否通过四，六级
				</div>
				<div>
					确认之后请自行到XXX教室领取
				</div>
			</div>
			<div id="2" style="display:none;" align="center">
				<form action="post.php" method="post">
				<select style="width:155px;margin-top:100px" name="c_or_e">
		        	<option value="1">中文</option>
				    <option value="2">英文</option>			      	 
				</select>
					<input type="hidden" name="type" value="zxzm_print" />
					<input type="submit" id="submit" name="submit" value="确认开具">
				</form>
				<div style="margin-top:50px">
					确认之后请自行到XXX教室领取
				</div>
				<div>
					提示：主教一楼可以缴费打印
				</div>
			</div>
			<div id="3" style="display:none;" align="center">
				<form action="post.php" method="post">
				<select style="width:155px;margin-top:100px" name="c_or_e">
		        	<option value="1">中文</option>
				    <option value="2">英文</option>			      	 
				</select>
					<input type="hidden" name="type" value="xjzm_print" />
					<input type="submit" id="submit" name="submit" value="确认开具">
				</form>
				<div style="margin-top:50px">
					确认之前请确认是否通过四，六级
				</div>
				<div>
					确认之后请自行到XXX教室领取
				</div>
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