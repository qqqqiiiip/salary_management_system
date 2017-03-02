<!DOCTYPE html>
<html>
<head>
	<title>已申请场地</title>
  <meta charset="utf-8"><link rel="alternate" media="handheld" href="#" />
  <meta content="charset=UTF-8">
</head>
<style type="text/css">
	#customers
  {
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  width:100%;
  border-collapse:collapse;
  margin-top: 10px;
  }

#customers td, #customers th
  {
  font-size:1em;text-align:center;
  border:1px solid  #808080 ;
  padding: 2px,2px,2px,2px;
  }

#customers th
  {
  font-size:1.1em;
  text-align:center;
  padding-top:5px;
  padding-bottom:4px;
  background-color:#CCCCCC;
  color:#000000;
  width: 120px;
  vertical-align: center;
  }

#customers tr.alt td
  {
  color:#000000;
  background-color:#EAF2D3;
  }
  textarea{
    border-bottom:2px;
    border-top-color: #DDDDDD;
  }
  #sub:hover{
    background-color:#CCCCFF;
  }
  h1{
    font-family: 宋体;
  }
</style>

<body>
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
      $sex= $result["sex"];
      $class= $result["class"];
      $tel= $result["tel"];

  } else {
      echo"连接出错";
  }
?>
<h1 align="center">已借用教室</h1>
  <table id="customers">
    <?php
      $q="select * from yan_jiaoshishenqing where num='$username'";//设置查询指令
      $result=mysql_query($q);//执行查询
      echo "<tr><th>场地</th><th>申请组织</th><th>活动名称</th><th>申请时间</th><th>开始时间</th><th>结束时间 </th><th>状态</th><th>详细信息</th></tr>";
      while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
       {
        echo"<tr><td>".$row["place"]."</td><td>".$row["organize"]."</td><td>".$row["active_name"]."</td><td>".$row["time"]."</td><td>".$row["began_time"]."</td><td>".$row["end_time"]."</td>";
        if($row["status"]==0)
        {
          echo "<td>申请中</td>";
        }
        if($row["status"]==1)
        {
          echo "<td>申请成功</td>";
        }
        if($row["status"]==2)
        {
          echo "<td>申请失败</td>";
        }
        $time= $row["time"];
        echo "<td>"."<a href='06-8-ed-more.php?time=$time'>打印</a> "."</td><tr>";
       }
       ?>
  </table>
</body>
</html>
