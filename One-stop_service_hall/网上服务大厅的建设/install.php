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
<script type="text/javascript">
	fun(function() {
        fun("#pic_show").picShow();
});
</script>

</head>
<style type="text/css">
td{
      height:30px;
      vertical-align:middle;
      align:center;
  }
#myText{
   width:600px;
  }
</style>

<body>
<!--弹出登录窗的遮罩 -->
	<div id="zhezhao" style="position:absolute;z-index:1;width:100%;height:100%;background-color:silver;display:none;opacity:.6;"></div>
	<!--头部-->
	<div class="head">
		<div class="head_top width">
			<?php
			session_start();mysql_query("set names utf8");//设置编码格式
				$arr=$_SESSION['userid'];
	        if( $_SESSION['username']=='') 
	        {
	        	echo"<a href='javascript:showLogin()'><span style='float:right'>注册</span></a>";
	      	    echo"<a href='javascript:showLogin()'><span style='float:right'>登录</span></a>";
	        }
			else
				echo "<a href='exit.php'><span style='float:right'>退出登录</span></a>"."<a href='personal-information.php?id=$arr'><span style='float:right'>个人信息</span></a>"."<span style='float:right'>welcome!$arr</span>";
			?>
		</div>
		<div class="head_mid">
			<img src="css/img/head.jpg" style="width:100%;">
		</div>
		<div class="head_bom">
			<div class="nav width">
				<span class="nav_left">欢迎访问北京化工大学一站式服务平台</span>
				<a href="main.php?id=<?php echo $arr  ?> " class="nav_right1">返回大厅首页</a>
				<a href="wwww.buct.edu.cn"  class="nav_right2">返回北化官网</a>
			</div>
		</div>
		<div id="loginDiv" style="background-color:white;width:300px;height:150px;border:1px solid silver;z-index:2;display:none;position:absolute;border-top:none">
	    <div onmousedown="titleMove()" id="login_title" style="width:300px;height:25px;background-color:
#999999 ;border:1px solid silver;border-left:none;border-right:none">
	     <img src="img/close.png" style="float:right" onclick="hidLogin()"/>
	    </div>
   		<ul style="margin-top:20px;margin-left:20px;">
			<form id="check" name="login" onsubmit="cookiee()" action="login.php" method="post">
				<p>用户名&nbsp;&nbsp;<input type="text" id="username" name="username"></p>
				<p>&nbsp;密码<input type="password" id="password" name="password"></p>
				<p><input type="submit" id="submit" value="登录"><input type="button" id="button" onclick="username.value='';password.value='';" value="重置"></p>
			</form>
		</ul>
	</div>

	<div class="main width">
		


		<div id="work" style="float: right;width: 1000px;height: 500px;">
		<div align="center">
		
		 <form  action="sign-up.php" name="reg_form" method="post" onsubmit="return check_reg()">
		  <table name="reg_table" align="left" style="margin-top:70px;margin-left:370px;">
		  <form action="check.php" method="post" >
		  		<tr>
		  		 <td>用户名：</td><td><input id="newusername" name="newusername" class="myText" type="text"  /></td>
				<td><span id="msg" style="color: red;">*</span> </td>
		  		</tr>
		  		<tr></tr>
		  </form>
		  <script> 
	    	$('#newusername').blur(function(){ 

	        var name=$.trim($(this).val()); 

		        if(name=='') 

		        { 
		        	 $("#msg").css('color','red');

		           $("#msg").text("请输入用户名"); 

		            $(this).focus(); 

		        } 
		        else 

		        { 

		            $.ajax({ 

		                'url':'check.php', 

		                'data':{name:name}, 

		                'type':'post', 

		                'dataType':'json', 

		                success:function(res){ 

		                    if(res==1) 

		                    { 

		                        $("#msg").css('color','green'); 

		                        $("#msg").text("该用户可以注册");  
		                        $(this).focus(); 

		                    } 

		                    else 

		                    { 

		                        $("#msg").css('color','red'); 

		                        $("#msg").text("该用户已经存在"); 

		                    } 

		                }, 

		                error:function(){alert("请求失败");} 

		            }) 

		        } 

		    }) 
		  		$('#repass').blur(function(){
				  if(document.getElementById('password1').value==document.getElementById('password2').value)
				  {
						$("show_repass").css('color','green'); 
				  }
				  else
				  {
						$("show_repass").css('color','red'); 
				        $("show_repass").text("密码不一致"); 
				  }
  				})
		  </script>
		  <tr>
		      <td>姓名：</td><td><input id="name" type="text" class="myText"  name="name" onblur="check_qq(this)"/><span style="color:red;" id="how_qq"></span></td>
		  </tr>
		  <tr>
		      <td>密码：</td><td><input id="password1" name="password1" class="myText" type="password"  onblur="check_len(this)"/><span id="show_pass" style="color:red;"></span></td>
		  </tr>
		  
		  

		  
		  <tr>
		      <td>联系电话：</td><td><input id="username" type="text" class="myText" name="email"  onblur="check_email(this)"/><span id="show_e" style="color:red;"></span></td>
		  </tr>
		 <td></td>
		 <td height="50" align="center">
		     <input id="submit" type="submit" value="注册" name="submit" style="margin-left:px;"/>
		     <input id="submit" type="reset"  value="重置" name="reset" style=""/>
		 </td>
		 
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