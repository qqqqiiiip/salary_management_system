<?php
$xmlDoc=new DOMDocument();


	//get the q parameter from URL
	$q=$_GET["q"];//搜索关键词
	$type=$_GET["type"];// 1显示搜索结构 2显示问题及答案
	$table=$_GET["database"];
	$con = mysql_connect("localhost","root","123");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_query("set names utf8");//设置编码格式
	mysql_select_db('onestep-stage', $con);
	if($type==1)
	{
	$sql1=mysql_query("select * from $table where (question like'%$q%')");
 	    $info1=mysql_fetch_array($sql1);
 	    if($info1)
 	    	do { 
 	    		$i=$info1["id"];
 	    		echo"<li style='text-align:left;'><a href="."javascript:showResult($i,2,'$table')".">".$info1["question"]."</a></li>";
          	 } while ($info1 = mysql_fetch_assoc($sql1));
        else
        	echo "未找到搜索结果";
    }else
    if($type==2)
	{
		$sql1=mysql_query("select * from $table where id=$q");
 	    $info1=mysql_fetch_array($sql1);
        echo "<li style='text-align:left;'>".$info1['question']."</li>";
        echo ",";
        echo "<li style='text-align:left;'>".$info1['answer']."</li>";
    }

?> 