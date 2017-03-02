<meta charset="utf-8">  
<?php

	$operate=$_GET["operate"];
	$table=$_GET["table"];
	$con = mysql_connect("localhost","root","123");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_query("set names utf8");//设置编码格式
	mysql_select_db('onestep-stage', $con);
	if ($operate=="mark") {
		$id=$_GET["id"];
		$check_query = mysql_query("SELECT status from $table where id=$id");  
		if($result = mysql_fetch_array($check_query)){  
		   if($result['status']==0)
		   		$sql=mysql_query("UPDATE $table SET status=1 WHERE id=$id");
		   	else
		   		$sql=mysql_query("UPDATE $table SET status=0 WHERE id=$id");
		}
		echo"<script>history.go(-1);</script>";

	}
	if ($operate=="admit") {
		$id=$_GET["id"];
		$sql=mysql_query("UPDATE $table SET status=1 WHERE id=$id");
		echo"<script>history.go(-1);</script>";

	}
	if ($operate=="refuse") {
		$id=$_GET["id"];
		$sql=mysql_query("UPDATE $table SET status=2 WHERE id=$id");
		echo"<script>history.go(-1);</script>";

	}
	if ($operate=="get_ticket") {
		$id=$_GET["id"];
		$check_query = mysql_query("SELECT ticket_num from $table where id=$id");  
		if($result = mysql_fetch_array($check_query)){  
		   if($result['ticket_num']<=0)
		   		echo"<script >alert('暂未有票');history.go(-1);</script>";
		   	else
		   	{
		   		$t=$result['ticket_num'];
		   		$sql=mysql_query("UPDATE $table SET ticket_num=$t-1 WHERE id=$id");
		   		echo"<script  charset='utf8'>alert('领取成功');history.go(-1);</script>";
		   	}
		}

	}


?>