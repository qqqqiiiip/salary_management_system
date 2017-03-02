<!DOCTYPE html>
<html>
<head>
	<title></title><meta charset=utf-8>
</head>
<body>

<?php

$username=$_POST['newusername'];
$password=$_POST['password1'];
$name=$_POST['name'];

$con = mysql_connect("localhost","root","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("set names utf8");//设置编码格式 
mysql_select_db('onestep-stage', $con);
$check = mysql_query("insert into login(username,password,userid) values ('$username','$password','$name')");  
if($check)
{
	session_start(); 
    mysql_query("set names utf8");//设置编码格式 
    $_SESSION['username'] = $username;  
    $_SESSION["userid"] = $name; 

    echo"<script>alert('注册成功');location.href='main.php?id=$name'</script>";
}
else
	echo"<script type='text/javascript'>alert('注册失败');location='install.php';</script>"; 
?>
</body>
</html>