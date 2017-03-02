<!DOCTYPE html>
<html>
<head>
	<title>已申请场地</title>
  <meta charset="utf-8"><link rel="alternate" media="handheld" href="#" />
  <meta content="charset=UTF-8">

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
  background-color:#DDDDDD;
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
  color:#DDDDDD;
  background-color:#DDDDDD;
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
</head>
<body>

    <?php
      session_start();
      $time=$_GET['time'];
       session_start();
      $username=$_SESSION['username'];
      $con = mysql_connect("localhost","root","123");
      if (!$con)
        {
        die('Could not connect: ' . mysql_error());
      }
      mysql_query("set names utf8");//设置编码格式
      mysql_select_db('onestep-stage', $con);
      $q="select * from yan_jiaoshishenqing where num='$username'and time='$time'";//设置查询指令
      $result=mysql_query($q);//执行查询
      while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
      {
        $organize=$row["organize"];
        $active_name=$row["active_name"];
        $name=$row["name"];
        $number=$row["number"];
        $class=$row["class"];
        $place=$row["place"];
        $num=$row["num"];
        $tel=$row["tel"];
        $reason=$row["reason"];
        $teacher=$row["teacher"];
        $began_time=$row["began_time"];
        $end_time=$row["end_time"];
        if($row["status"]==0)
        {
          $status="申请中";
        }
        if($row["status"]==1)
        {
          $status="申请成功";
        }
        if($row["status"]==2)
        {
          $status="申请失败";
        }
      }
   ?>
  <input style="float:right" type="button" class="noprint" onclick="window.open('06-8-ed.php', 'newwindow', 'height=400px, width=800px, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no')" value="返回">
    <h1 align="center" >教室借用申请</h1>
    <form action="#" method="">
      <table id="customers">
        <tr><th>申请组织</th><td colspan=3><?php echo $organize; ?></td></tr>
        <tr><th>活动名称</th><td colspan=3><?php echo $active_name; ?></td></tr>
        <tr><th>姓名</th><td><?php echo $name; ?></td><th>班级</th><td><?php echo $class; ?></td></tr>
        <tr><th>学号</th><td><?php echo $num; ?></td>><th>指导老师</th><td><?php echo $teacher; ?></td></tr>
        <tr><th>教室</th><td><?php echo $place; ?></td><th>时间段</th><td><?php echo $began_time; ?>至<?php echo $end_time; ?></td></tr>
        <tr><th height="80px;">用途</th><td colspan=3 ><?php echo $reason; ?></td></tr>
        <tr><th>申请日期</th><td><?php echo $time ; ?></td><th>负责老师</th><td></td></tr>
        <tr><th>申请状态</th><td><?php echo $status; ?></td><th>联系电话</th><td><?php echo $tel ; ?></td></tr>
        <tr><th height="100px">注意事项</th><td style="text-align:left;" colspan=3><p>1． 教室内只可开展教学活动及学生素质教育活动，严禁进行非法活动及任何盈利性的活动；</p><p> 2． 凡讲座内容、主讲人、参加对象等主要信息发生变更，必须重新提出借用申请；</p><p> 3． 活动组织者须持本表及时到教室管理组（下院-513）办理登记手续，否则取消本次借用教室的权利；</p><p> 4． 若需使用多媒体设备，请与教育技术中心（E-502）联系；</p> 5．爱护公物，确保教室整洁、完整。</td></tr>
     </table>
     <div align="center" class="noprint" style="margin-top:10px;margin-left:30px;"><input id="sub" onclick='window.print()' target='_self' type="submit" value="确认"></div>
    </form>
    <style media=print type="text/css">   
    .noprint{visibility:hidden}   
    </style>   
</body>
</html>
