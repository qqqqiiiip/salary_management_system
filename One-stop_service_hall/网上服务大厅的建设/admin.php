<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld" href="#" /><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>北京化工大学一站式平台</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/check.js"></script>
<script src="ajax.js"></script>
<script>
window.onload=function ()
{
    var id=<?php echo $_GET['id'];?>;
    var idd=<?php echo $_GET['idd'];?>;
    var t=id+'-'+idd;
    document.getElementById(t).style.display='block';
	
}
</script>
<style>
input{
	width: 100px;
}
</style>

</head>
<body>
	<div class="head">
		<div class="head_top width">
			<?php
			session_start();mysql_query("set names utf8");//设置编码格式
				$arr=$_SESSION['userid'];
	        if( $_SESSION['username']==''||$_SESSION['right']==0)
	        {
	        	if($_SESSION['right']==0)
	        		echo"<script charset='utf-8'>alert('无管理员权限');location.href='main.php'</script>";
	        	else
	        	echo"<script charset='utf-8'>alert('请登录');location.href='main.php'</script>";
	        }
			else
				echo "<a href='exit.php'><span style='float:right'>退出登录</span></a>"."<a href='install.php' target='_blank'><span style='float:right'>注册</span></a>"."<span style='float:right'>welcome!$arr</span>";
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
				   	<li><a href="admin.php?id=1&idd=1" title="数字校园">银行卡 一卡通 班车</a></li>
				   	<li><a href="admin.php?id=1&idd=2">奖助学金补发办理</a></li>
		            <li><a href="admin.php?id=1&idd=3">补助及奖学金材料开具</a></li>
		            <li><a href="admin.php?id=1&idd=4">征兵入伍咨询</a></li>
		            <li><a href="admin.php?id=1&idd=5">成绩单打印</a></li>
				    </ul>
				</li>
				<li><img src="css/img/2.png">
				    <ul>
		              <li><a href="admin.php?id=2&idd=1">咨询与受理</a></li>
		              <li><a href="admin.php?id=2&idd=2">毕业生还款办理</a></li>
		            </ul>
				</li>
				<li><img src="css/img/6.png">
		            <ul>
		              <li><a href="admin.php?id=3&idd=1">成绩单打印</a></li>
		              <li><a href="admin.php?id=3&idd=2">报考培养和学位问题咨询</a></li>
		              <li><a href="admin.php?id=3&idd=3">宿舍变更</a></li>
		              <li><a href="admin.php?id=3&idd=4">教室借用手续办理</a></li>
		              <li><a href="admin.php?id=3&idd=5">证明材料开具</a></li>
		            </ul>
		          </li>
				<li><img src="css/img/3.png">
		            <ul>
		              <li><a href="admin.php?id=4&idd=1">学生活动场地申请</a></li>
		              <li><a href="admin.php?id=4&idd=2">文化活动咨询、门票发放</a></li>
		            </ul>
		          </li>
		          <li><img src="css/img/4.png">
		            <ul>
		              <li><a href="admin.php?id=5&idd=1">预约问题解答</a></li>
		            </ul>
		          </li>
		          <li><img src="css/img/5.png">
		            <ul>
		              <li><a href="admin.php?id=6&idd=1">四六级证明补办</a></li>
		              <li><a href="admin.php?id=6&idd=2">在校证明开具</a></li>
		              <li><a href="admin.php?id=6&idd=3">学籍证明办理</a></li>
		            </ul>
		          </li>
		          <li><img src="css/img/7.png">
		            <ul>
		              <li><a href="admin.php?id=7&idd=1">图书馆借阅</a></li>
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
				    echo"连接出错";
				}
				$link=$con; 
				$Page_size=5; 
				if($_GET['id']==1&&$_GET['idd']==2)
					$result=mysql_query('select * from ben_scholarships_reissue'); 
				else
				if($_GET['id']==1&&$_GET['idd']==3)
					$result=mysql_query('select * from ben_things_order');
				if($_GET['id']==1&&$_GET['idd']==4)
					$result=mysql_query('select * from ben_problem_solving');
				if($_GET['id']==1&&$_GET['idd']==5)
					$result=mysql_query('select * from ben_print');
				if($_GET['id']==2&&$_GET['idd']==1)
					$result=mysql_query('select * from zhu_consult');
				if($_GET['id']==3&&$_GET['idd']==1)
					$result=mysql_query('select * from yan_print');
				if($_GET['id']==3&&$_GET['idd']==2)
					$result=mysql_query('select * from yan_consult');
				if($_GET['id']==3&&$_GET['idd']==3)
					$result=mysql_query('select * from yan_sushebiangeng');
				if($_GET['id']==3&&$_GET['idd']==4)
					$result=mysql_query('select * from yan_jiaoshishenqing');
				if($_GET['id']==3&&$_GET['idd']==5)
					$result=mysql_query('select * from yan_things_order');
				if($_GET['id']==4&&$_GET['idd']==1)
					$result=mysql_query('select * from tuan_shenqing');
				if($_GET['id']==4&&$_GET['idd']==2)
					$result=mysql_query('select * from tuan_ticket');
				if($_GET['id']==5&&$_GET['idd']==1)
					$result=mysql_query('select * from xueye_consult');
				if($_GET['id']==6&&$_GET['idd']==1)
					$result=mysql_query('select * from slj_print');			 
				if($_GET['id']==6&&$_GET['idd']==2)
					$result=mysql_query('select * from zxzm_print');
				if($_GET['id']==6&&$_GET['idd']==3)
					$result=mysql_query('select * from xjzm_print');
				$count = mysql_num_rows($result); 
				$page_count = ceil($count/$Page_size); 
				$init=1; 
				$page_len=7; 
				$max_p=$page_count; 
				$pages=$page_count; 

				//判断当前页码 
				if(empty($_GET['page'])||$_GET['page']<0){ 
				$page=1; 
				}else { 
				$page=$_GET['page']; 
				} 
			?>
			<div id="1-1" style="display:none;">
				<div style="float:right"><input id="submit" type="submit" onclick="location.href='http://portal.buct.edu.cn/'" value="全屏浏览"></div>
		 		<iframe src="http://portal.buct.edu.cn/" style='width:100%;height:600px;'>
		 			
		 		</iframe>

			</div>
			<div id="1-2" style="display:none;">
		 		<div align="center"><h1>奖助学金补发办理</h1></div>
		    	<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				        $q="select * from ben_scholarships_reissue";//设置查询指令
					    $offset=$Page_size*($page-1); 
						$sql="select * from ben_scholarships_reissue limit $offset,$Page_size"; 
						$result=mysql_query($sql,$link); 
					    echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th>原因</th><th style='width:80px'>申请时间</th><th style='width:60px'>联系电话</th><th style='width:60px'>辅导员</th><th style='width:170px'>状态</th></tr>";
						while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
						{
							$numm=$row["id"];
						echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td style='max-width:60px'>".$row["reason"]."</td><td>".$row["time"]."</td><td>".$row["tel"]."</td><td>".$row["teacher"]."</td>";
						if($row["status"]==0)
						{
						  echo "<td>未处理&nbsp;|&nbsp;<a style='color:red' href='update.php?operate=mark&id=$numm&table=ben_scholarships_reissue'>标记为已处理</a></td><tr>";
						}
						if($row["status"]==1)
						{
						  echo "<td style='color:green'>已处理</td><tr>";
						}
						}
						?>
						</table>
		  <!-- 		  	<input type="hidden" name="type" value="ben_Scholarships_reissue" />
		     		<div align="right" style="margin-top:10px;"><input id="submit" type="submit" value="提交申请"></div>-->
		   		</form>
			</div>
			<div id="1-3" style="display:none;">
		 		<div align="center" style="margin-top:20px"><h1>材料开具预约</h1>
		    	<form action="post.php" method="post">
			      	<table id="customers">
			      		<?php
				          $q="select * from ben_things_order";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from ben_things_order limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:100px'>事务类型</th><th style='width:80px'>预约时间</th><th style='width:60px'>联系电话</th><th>备注</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["things_type"]."</td><td>".$row["time"]."</td><td>".$row["tel"]."</td><td>".$row["note"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=ben_things_order'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=ben_things_order'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>预约成功</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>预约失败</td></tr>";
					        }
					       }
				        ?>
			      	</table>
		   		</form>
		   		</div>
			</div>
			<div id="1-4" style="display:none;">
				<div align="center" style="">
					<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				          $q="select * from ben_problem_solving";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from ben_problem_solving limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>提问者</th><th style='width:80px'>提问者学号</th><th style='width:80px'>问题描述</th><th style='width:80px'>问题内容</th><th style='width:80px'>解答</th><th style='width:60px'>提问时间</th><th style='width:60px'>备注</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["question"]."</td><td style='max-width:60px'>".$row["questin_content"]."</td><td>".$row["answer"]."</td><td>".$row["tel"]."</td><td>".$row["teacher"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=mark&id=$numm&table=ben_problem_solving'>标记为常见问题</a></td><tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:red'>常见问题<br><a style='color:green' href='update.php?operate=mark&id=$numm&table=ben_problem_solving'>取消标记</a></td><tr>";
					        }
					       }
				        ?>
		   		    </table>
		   		</form>
				</div>
			</div>
			<div id="1-5" style="display:none;">
		 		<div align="center" style="margin-top:20px"><h1>成绩单打印</h1>
		    	<form action="post.php" method="post">
			      	<table id="customers">
			      		<?php
				          $q="select * from ben_print";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from ben_print limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th style='width:100px'>打印类型</th><th style='width:80px'>时间</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td>".$row["print_type"]."</td><td>".$row["time"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=ben_print'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=ben_print'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>已打印</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>未打印</td></tr>";
					        }
					       }
				        ?>
			      	</table>
		   		</form>
		   		</div>

			</div>
			<div id="2-1" style="display:none;">
				<div align="center" style="">
					<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				          $q="select * from zhu_consult";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from zhu_consult limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>提问者</th><th style='width:80px'>提问者学号</th><th style='width:80px'>问题描述</th><th style='width:80px'>问题内容</th><th style='width:80px'>解答</th><th style='width:60px'>提问时间</th><th style='width:60px'>备注</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["question"]."</td><td style='max-width:60px'>".$row["questin_content"]."</td><td>".$row["answer"]."</td><td>".$row["tel"]."</td><td>".$row["teacher"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=mark&id=$numm&table=zhu_consult'>标记为常见问题</a></td><tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:red'>常见问题<br><a style='color:green' href='update.php?operate=mark&id=$numm&table=zhu_consult'>取消标记</a></td><tr>";
					        }
					       }
				        ?>
		   		    </table>
		   		</form>
				</div>
			</div>
			<div id="3-1" style="display:none;">
		 		<div align="center" style="margin-top:20px"><h1>成绩单打印</h1>
		    	<form action="post.php" method="post">
			      	<table id="customers">
			      		<?php
				          $q="select * from yan_print";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from yan_print limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th style='width:100px'>打印类型</th><th style='width:80px'>时间</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td>".$row["print_type"]."</td><td>".$row["time"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=yan_print'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=yan_print'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>已打印</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>未打印</td></tr>";
					        }
					       }
				        ?>
			      	</table>
		   		</form>
		   		</div>

			</div>
			<div id="3-2" style="display:none;">
				<div align="center" style="">
					<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				          $q="select * from yan_consult";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from yan_consult limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>提问者</th><th style='width:80px'>提问者学号</th><th style='width:80px'>问题描述</th><th style='width:80px'>问题内容</th><th style='width:80px'>解答</th><th style='width:60px'>提问时间</th><th style='width:60px'>备注</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["question"]."</td><td style='max-width:60px'>".$row["questin_content"]."</td><td>".$row["answer"]."</td><td>".$row["tel"]."</td><td>".$row["teacher"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=mark&id=$numm&table=yan_consult'>标记为常见问题</a></td><tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:red'>常见问题<br><a style='color:green' href='update.php?operate=mark&id=$numm&table=yan_consult'>取消标记</a></td><tr>";
					        }
					       }
				        ?>
		   		    </table>
		   		</form>
				</div>
			</div>
			<div id="3-3" style="display:none;">
		 		<div align="center"><h1>宿舍变更</h1></div>
		    	<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				        $q="select * from yan_sushebiangeng";//设置查询指令
					    $offset=$Page_size*($page-1); 
						$sql="select * from yan_sushebiangeng limit $offset,$Page_size"; 
						$result=mysql_query($sql,$link); 
					    echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>原宿舍</th><th style='width:80px'>变更宿舍</th><th style='width:80px'>班级</th><th>原因</th><th style='width:80px'>申请时间</th><th style='width:60px'>联系电话</th><th style='width:60px'>辅导员</th><th style='width:170px'>状态</th></tr>";
						while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
						{
							$numm=$row["id"];
						echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td>".$row["yuan"]."</td><td>".$row["want"]."</td><td style='max-width:60px'>".$row["reason"]."</td><td>".$row["time"]."</td><td>".$row["tel"]."</td><td>".$row["teacher"]."</td>";
						if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=yan_sushebiangeng'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=yan_sushebiangeng'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>已同意</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>未同意</td></tr>";
					        }
						}
						?>
						</table>
		   		</form>
			</div>
			<div id="3-4" style="display:none;">
		 		<div align="center"><h1>教室借用申请</h1></div>
		    	<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				        $q="select * from yan_jiaoshishenqing";//设置查询指令
					    $offset=$Page_size*($page-1); 
						$sql="select * from yan_jiaoshishenqing limit $offset,$Page_size"; 
						$result=mysql_query($sql,$link); 
					    echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>申请组织</th><th style='width:80px'>活动名称</th><th style='width:80px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th>原因</th><th style='width:80px'>时间段</th><th style='width:60px'>联系电话</th><th style='width:60px'>申请场地</th><th style='width:170px'>状态</th></tr>";
						while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
						{
							$numm=$row["id"];
						echo"<tr><td>".$row["id"]."</td><td>".$row["organize"]."</td><td>".$row["active_name"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td style='max-width:60px'>".$row["reason"]."</td><td>".$row["began_time"]."-".$row["end_time"]."</td><td>".$row["tel"]."</td><td>".$row["place"]."</td>";
						if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=yan_jiaoshishenqing'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=yan_jiaoshishenqing'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>已同意</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>未同意</td></tr>";
					        }
						}
						?>
						</table>
		   		</form>
			</div>
			<div id="3-5" style="display:none;">
		 		<div align="center" style="margin-top:20px"><h1>材料开具预约</h1>
		    	<form action="post.php" method="post">
			      	<table id="customers">
			      		<?php
				          $q="select * from yan_things_order";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from yan_things_order limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:100px'>事务类型</th><th style='width:80px'>预约时间</th><th style='width:60px'>联系电话</th><th>备注</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["things_type"]."</td><td>".$row["time"]."</td><td>".$row["tel"]."</td><td>".$row["note"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=yan_things_order'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=yan_things_order'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>预约成功</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>预约失败</td></tr>";
					        }
					       }
				        ?>
			      	</table>
		   		</form>
		   		</div>
			</div>
			<div id="4-1" style="display:none;">
		 		<div align="center"><h1>学生活动场地申请</h1></div>
		    	<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				        $q="select * from tuan_shenqing";//设置查询指令
					    $offset=$Page_size*($page-1); 
						$sql="select * from tuan_shenqing limit $offset,$Page_size"; 
						$result=mysql_query($sql,$link); 
					    echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>申请组织</th><th style='width:80px'>活动名称</th><th style='width:80px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th>原因</th><th style='width:80px'>时间段</th><th style='width:60px'>联系电话</th><th style='width:60px'>申请场地</th><th style='width:170px'>状态</th></tr>";
						while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
						{
							$numm=$row["id"];
						echo"<tr><td>".$row["id"]."</td><td>".$row["organize"]."</td><td>".$row["active_name"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td style='max-width:60px'>".$row["reason"]."</td><td>".$row["began_time"]."-".$row["end_time"]."</td><td>".$row["tel"]."</td><td>".$row["place"]."</td>";
						if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=tuan_shenqing'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=tuan_shenqing'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>已同意</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>未同意</td></tr>";
					        }
						}
						?>
						</table>
		   		</form>
			</div>
			<div id="4-2" style="display:none;">
					<table id="customers">
			      		<?php
				          $q="select * from tuan_ticket";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from tuan_ticket limit $offset,$Page_size";
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>活动名称</th><th style='width:80px'>活动地点</th><th style='width:80px'>活动时间</th><th style='width:80px'>举办组织</th><th style='width:60px'>剩余门票数</th><th style='width:50px'>备注</th><th style='width:170px'>状态</th></tr>";
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
					       echo "<form action='post.php' method='post'>";
					       echo "<input type='hidden' name='type' value='tuan_ticket' />";
					       echo"<tr><td>"."发布活动"."</td><td>"."<input name='active_name' type='text' />"."</td><td>"."<input name='active_place' type='text' />"."</td><td>"."<input name='active_time' type='text' />"."</td><td>"."<input name='organize' type='text' />"."</td><td>"."<input name='ticket_num' type='text' />"."</td><td>"."<input name='note' type='text' />"."</td><td>"."<input type='submit' id='submit' value='确认'/>" ."</td></tr>";
					       echo "</form>"; 
				        ?>
			      	</table>
			      	
			</div>
			<div id="5-1" style="display:none;">
				<div align="center" style="">
					<form action="post.php" method="post">
			      	<table id="customers">
				        <?php
				          $q="select * from xueye_consult";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from xueye_consult limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>提问者</th><th style='width:80px'>提问者学号</th><th style='width:80px'>问题描述</th><th style='width:80px'>问题内容</th><th style='width:80px'>解答</th><th style='width:60px'>提问时间</th><th style='width:60px'>备注</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["question"]."</td><td style='max-width:60px'>".$row["questin_content"]."</td><td>".$row["answer"]."</td><td>".$row["tel"]."</td><td>".$row["teacher"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=mark&id=$numm&table=xueye_consult'>标记为常见问题</a></td><tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:red'>常见问题<br><a style='color:green' href='update.php?operate=mark&id=$numm&table=xueye_consult'>取消标记</a></td><tr>";
					        }
					       }
				        ?>
		   		    </table>
		   		</form>
				</div>
			</div>
			<div id="6-1" style="display:none;">
		 		<div align="center" style="margin-top:20px"><h1>四六级证明打印</h1>
		    	<form action="post.php" method="post">
			      	<table id="customers">
			      		<?php
				          $q="select * from slj_print";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from slj_print limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th style='width:100px'>打印类型</th><th style='width:80px'>时间</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td>".$row["print_type"]."</td><td>".$row["time"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=slj_print'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=slj_print'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>已打印</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>未打印</td></tr>";
					        }
					       }
				        ?>
			      	</table>
		   		</form>
		   		</div>

			</div>
			<div id="6-2" style="display:none;">
		 		<div align="center" style="margin-top:20px"><h1>办理在校证明</h1>
		    	<form action="post.php" method="post">
			      	<table id="customers">
			      		<?php
				          $q="select * from zxzm_print";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from zxzm_print limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th style='width:100px'>打印类型</th><th style='width:80px'>时间</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td>".$row["print_type"]."</td><td>".$row["time"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=zxzm_print'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=zxzm_print'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>通过</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>拒绝</td></tr>";
					        }
					       }
				        ?>
			      	</table>
		   		</form>
		   		</div>

			</div>
			<div id="6-3" style="display:none;">
		 		<div align="center" style="margin-top:20px"><h1>办理学籍证明</h1>
		    	<form action="post.php" method="post">
			      	<table id="customers">
			      		<?php
				          $q="select * from xjzm_print";//设置查询指令
					      $offset=$Page_size*($page-1); 
						  $sql="select * from xjzm_print limit $offset,$Page_size"; 
						  $result=mysql_query($sql,$link);
					      echo "<tr><th style='width:50px'>序号</th><th style='width:70px'>姓名</th><th style='width:80px'>学号</th><th style='width:80px'>班级</th><th style='width:100px'>打印类型</th><th style='width:80px'>时间</th><th style='width:170px'>状态</th></tr>";
					      while($row=mysql_fetch_array($result))//将result结果集中查询结果取出一条
					       {
					       	$numm=$row["id"];
					        echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["num"]."</td><td>".$row["class"]."</td><td>".$row["print_type"]."</td><td>".$row["time"]."</td>";
					        if($row["status"]==0)
					        {
					          echo "<td><a style='color:green' href='update.php?operate=admit&id=$numm&table=xjzm_print'>通过</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red' href='update.php?operate=refuse&id=$numm&table=xjzm_print'>拒绝</a></td></tr>";
					        }
					        if($row["status"]==1)
					        {
					          echo "<td style='color:green'>通过</td></tr>";
					        }
					        if($row["status"]==2)
					        {
					          echo "<td style='color:red'>拒绝</td></tr>";
					        }
					       }
				        ?>
			      	</table>
		   		</form>
		   		</div>

			</div>
			
			<?
			$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
			$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

			$key='<div class="page">'; 
			$key.="<span>$page/$pages</span> "; //第几页,共几页 
			if($page!=1){ 
			$key.="<a href=\"".$_SERVER['PHP_SELF']."?id=".$_GET['id']."&idd=".$_GET['idd']."&page=1\">首页</a> "; //第一页 
			$key.=" <a href=\"".$_SERVER['PHP_SELF']."?id=".$_GET['id']."&idd=".$_GET['idd']."&page=".($page-1)."\">上一页</a> ";//上一页  
			}else { 
			$key.="首页 ";//第一页 
			$key.="上一页"; //上一页 
			} 
			if($pages>$page_len){ 
			//如果当前页小于等于左偏移 
			if($page<=$pageoffset){ 
			$init=1; 
			$max_p = $page_len; 
			}else{//如果当前页大于左偏移 
			//如果当前页码右偏移超出最大分页数 
			if($page+$pageoffset>=$pages+1){ 
			$init = $pages-$page_len+1; 
			}else{ 
			//左右偏移都存在时的计算 
			$init = $page-$pageoffset; 
			$max_p = $page+$pageoffset; 
			} 
			} 
			} 
			for($i=$init;$i<=$max_p;$i++){ 
			if($i==$page){ 
			$key.=' <span>'.$i.'</span>'; 
			} else { 
			$key.=" <a href=\""."?id=".$_GET['id']."&idd=".$_GET['idd']."&page=".$i."\">".$i."</a>"; 
			} 
			} 
			if($page!=$pages){ 
			$key.=" <a href=\"".$_SERVER['PHP_SELF']."?id=".$_GET['id']."&idd=".$_GET['idd']."&page=".($page+1)."\">下一页</a> ";//下一页 
			$key.="<a href=\"".$_SERVER['PHP_SELF']."?id=".$_GET['id']."&idd=".$_GET['idd']."&page={$pages}\">尾页</a>"; //最后一页 
			}else { 
			$key.="下一页 ";//下一页 
			$key.="尾页"; //最后一页 
			} 
			$key.='</div>'; 
			?> 
			<tr> 
			<td colspan="2" bgcolor="#E0EEE0"><div align="center"><?php echo $key?></div></td> 
			</tr> 
		    </table>
			<div id="7-1" style="display:none;">
				<div style="float:right"><input id="submit" type="submit" onclick="location.href='http://lib.buct.edu.cn/'" value="全屏浏览"></div>
		 		<iframe src="http://lib.buct.edu.cn/" style='width:100%;height:600px;'>
		 			
		 		</iframe>

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
