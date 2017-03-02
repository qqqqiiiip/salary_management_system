<meta charset="utf-8">  
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset=utf-8>
</head>
<body>


<?php
mysql_query("set names utf8");//设置编码格式 
$username=$_POST['username'];
$password=$_POST['password'];
$r=$_GET['right'];
if($r==-1)
{
  session_start(); 
    mysql_query("set names utf8");//设置编码格式 
    $_SESSION['username'] = "fangke"; 
    $_SESSION['userid'] = "访客";
    echo"<script>location.href='main.php?id=fangke'</script>"; 
}
$con = mysql_connect("localhost","root","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('onestep-stage', $con);
mysql_query("set names utf8");

$check_query = mysql_query("SELECT * from login where username='$username' and password='$password' limit 1");  
if($result = mysql_fetch_array($check_query)){  
    //登录成功  
    session_start(); 
    mysql_query("set names utf8");//设置编码格式 
    $_SESSION['username'] = $username;  
    $_SESSION["userid"] = $result["name"];
    $right=$result["right"]; 
    $_SESSION["right"] = $result["right"];
    if($right==1)
      echo"<script>location.href='admin.php?id=1&idd=2'</script>";
    else
      echo"<script>history.go(-1);</script>";
    exit;  
} else {  
    echo"<script>alert('用户名或密码错误');history.go(-1);</script>";
} 

mysql_close($con);
?>
</body>
</html>