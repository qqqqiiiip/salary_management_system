<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld" href="#" /><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>北京化工大学一站式平台</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<script src="ajax.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript"> var fun = jQuery.noConflict(true);</script>
<script type="text/javascript" src="js/main_mid.js"></script>
<script src="ajax.js"></script>
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
				<img src="css/img/3.png">
		            <ul id="now">
		              <li><a href="Group_learning.php?idd=1">学生活动场地申请</a></li>
		              <li><a href="Group_learning.php?idd=2">文化活动咨询、门票发放</a></li>
		            </ul>
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

		
		<div id="work" style="float: right;width: 800px;">
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
			    <div>
			    	<input style="float:right" id="submit" type="button" onclick="window.open('tuan/03-1-ed.php', 'newwindow', 'height=400px, width=800px, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no')" value="查看已申请场地">
			    </div>
			    <h1 align="center" style="margin-left:100px;" >场地申请</h1>
			    <form action="post.php" method="post">
			        <table id="customers">
				        <tr><th>申请组织</th><td colspan=3><textarea name="organize" cols ="83" rows = "1"></textarea></td></tr>
				        <tr><th>活动名称</th><td colspan=3><textarea name="active_name" cols ="83" rows = "1"></textarea></td></tr>
				        <tr><th>姓名</th><td style="background-color:#DDDDDD; "><?php echo "$name" ?></td><th>班级</th><td style="background-color:#DDDDDD; "><?php echo "$class"; ?></td></tr>
				        <tr><th>学号</th><td style="background-color:#DDDDDD; "><?php echo "$num"; ?></td><th>指导老师</th><td><textarea name="teacher" cols ="21" rows = "1"></textarea></td></tr>
				        <tr><th>场地</th><td><textarea name="place" cols ="21" rows = "1"></textarea></td><th>时间段</th><td><?php echo date('Y/m/') ; ?><textarea name="began_time" cols ="17" rows = "1"></textarea>至<textarea name="end_time" cols ="17" rows = "1"></textarea></td></td></tr>
				        <tr><th height="80px;">用途</th><td colspan=3 ><textarea name="reason" cols ="83" rows = "5"></textarea></td></tr>
				        <tr><th>申请日期</th><td style="background-color:#DDDDDD; "><?php echo date('Y/m/d') ; ?></td><th>负责老师</th><td style="background-color:#DDDDDD; "></td></tr>
				        <tr><th>申请状态</th><td style="background-color:#DDDDDD; "></td><th>联系电话</th><td><textarea name="tel" cols="44" rows = "1" ><?php echo "$tel"; ?></textarea></td></tr>
				        <tr><th height="100px">注意事项</th><td style="text-align:left;background-color:#DDDDDD;" colspan=3><p>1． 教室内只可开展教学活动及学生素质教育活动，严禁进行非法活动及任何盈利性的活动；</p><p> 2． 凡讲座内容、主讲人、参加对象等主要信息发生变更，必须重新提出借用申请；</p><p> 3． 活动组织者须持本表及时到教室管理组（下院-513）办理登记手续，否则取消本次借用教室的权利；</p><p> 4． 若需使用多媒体设备，请与教育技术中心（E-502）联系；</p> 5．爱护公物，确保教室整洁、完整。</td></tr>
			        </table>
			     	<input type="hidden" name="type" value="ben_place_application" />
			    <div align="right" style="margin-top:10px;"><input id="submit" type="submit" value="提交申请"></div>
			    </form>
			</div>
			<div id="2" style="display:none;">
					<table id="customers">
			      		<?php
				          $q="select * from tuan_ticket";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from tuan_ticket";
						  $result=mysql_query($sql,$con);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>活动名称</th><th style='width:80px'>活动地点</th><th style='width:100px'>活动时间</th><th style='width:80px'>举办组织</th><th style='width:60px'>剩余门票数</th><th>备注</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["active_name"]."</td><td>".$row["active_place"]."</td><td>".$row["active_time"]."</td><td>".$row["organize"]."</td><td>".$row["ticket_num"]."</td><td>".$row["note"]."</td>";
					        if($row["status"]==0)
					        {
					        	if($row["ticket_num"]>0)
					         		echo "<td><a style='color:green'>未开始</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style='color:red' href='update.php?operate=get_ticket&id=$numm&table=tuan_ticket'>领取门票</a></td></tr>";
					        	else
					        		echo "<td><a style='color:green'>未开始</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style='color:black'>票已领完</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:black'>已结束</td></tr>";
					        }
					       }
				        ?>
			      	</table>
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
