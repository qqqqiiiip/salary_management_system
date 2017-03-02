<meta charset="utf-8">  
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset=utf-8>
</head>
<body>
<?php
	$type=$_POST['type'];
	$ben_Scholarships_reissue="ben_Scholarships_reissue";//本科生奖助学金补发办理
	$ben_things_order="ben_things_order";//本科生材料开具预约
	$ben_place_application="ben_place_application";//本科生场地申请
	$ben_problem_search="ben_problem_search";//征兵入伍咨询
	$yan_dormitorychange="yan_dormitorychange";//研究生宿舍更换申请
	$yan_classroom_application="yan_classroom_application";//研究生教室借用申请
	session_start();
	$username=$_SESSION['username'];
	if($username=='fangke')
	{
		 echo"<script>alert('sorry you canot post');history.go(-1);</script>";
		 return false;
	}
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
	}
	else{
	    echo"连接出错";
	}
	if($type==$ben_Scholarships_reissue)//本科生奖助学金补发办理
	{
		$qid = mysql_query("select count(*) as total from ben_Scholarships_reissue ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$time=date('Y-m-d H:i');
		$reason=$_POST['reason'];
		$status=0;
		$tel=$_POST['tel'];
		$teacher=$_POST['teacher'];
		$check = mysql_query("insert into ben_Scholarships_reissue(id,name,num,class,time,reason,tel,status,teacher) values ('$count','$name','$num','$class','$time','$reason','$tel','$status','$teacher')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if($type==$ben_things_order)//本科生材料开具预约
	{
		$qid = mysql_query("select count(*) as total from ben_things_order ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$name=$_POST['name'];
		$num=$_POST['num'];
		$status=0;
		$tel=$_POST['tel'];
		$things_type=$_POST['things_type'];
		$time=$_POST['time'];
		$note=$_POST['note'];
		$count++;
		$check = mysql_query("insert into ben_things_order(id,name,num,tel,things_type,time,note,status) values ('$count','$name','$num','$tel','$things_type','$time','$note','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if ($type=="ben_my_question") {
		$qid = mysql_query("select count(*) as total from ben_problem_solving ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$status=0;
		$my_question=$_POST['my_question'];
		$my_question_content=$_POST['my_question_content'];
		$check = mysql_query("insert into ben_problem_solving(id,name,num,question,questin_content,status) values ('$count','$name','$num','$my_question','$my_question_content','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";

	}else
	if ($type=="ben_print") {
		$qid = mysql_query("select count(*) as total from ben_print ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$status=0;
		if($_POST['c_or_e']==1)
			$c_or_e="中文";
		else
			$c_or_e="英文";
		$time=date('y-m-d');
		$count++;
		$check = mysql_query("insert into ben_print(id,name,num,class,print_type,time,status) values ('$count','$name','$num','$class','$c_or_e','$time','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if ($type=="zhu_consult_my_question") {
		$qid = mysql_query("select count(*) as total from zhu_consult ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$status=0;
		$my_question=$_POST['my_question'];
		$my_question_content=$_POST['my_question_content'];
		$check = mysql_query("insert into zhu_consult(id,name,num,question,questin_content,status) values ('$count','$name','$num','$my_question','$my_question_content','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";

	}else
	if ($type=="yan_print") {
		$qid = mysql_query("select count(*) as total from yan_print ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$status=0;
		if($_POST['c_or_e']==1)
			$c_or_e="中文";
		else
			$c_or_e="英文";
		$time=date('y-m-d');
		$count++;
		$check = mysql_query("insert into yan_print(id,name,num,class,print_type,time,status) values ('$count','$name','$num','$class','$c_or_e','$time','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if ($type=="yan_my_question") {
		$qid = mysql_query("select count(*) as total from yan_consult ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$status=0;
		$my_question=$_POST['my_question'];
		$my_question_content=$_POST['my_question_content'];
		$check = mysql_query("insert into yan_consult(id,name,num,question,questin_content,status) values ('$count','$name','$num','$my_question','$my_question_content','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";

	}else
	if($type==$yan_dormitorychange)
	{
		$qid = mysql_query("select count(*) as total from yan_sushebiangeng ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$yuan=$_POST['yuan'];
		$want=$_POST['want'];
		$time=date('Y/m/d');
		$reason=$_POST['reason'];
		$status=0;
		$tel=$_POST['tel'];
		$teacher=$_POST['teacher'];
		$check = mysql_query("insert into yan_sushebiangeng(id,name,num,class,time,yuan,want,reason,tel,status,teacher) values ('$count','$name','$num','$class','$time','$yuan','$want','$reason','$tel','$status','$teacher')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if($type==$yan_classroom_application)
	{
		$qid = mysql_query("select count(*) as total from yan_jiaoshishenqing ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$organize=$_POST['organize'];
	    $active_name=$_POST['active_name'];
        $time=date('Y/m/d');
        $began_time=date('Y/m/').$_POST['began_time'];
        $end_time=date('Y/m/').$_POST['end_time'];
        $place=$_POST['place'];
        $reason=$_POST['reason'];
        $status=0;
        $tel=$_POST['tel'];
        $teacher=$_POST['teacher'];
        $check = mysql_query("insert into yan_jiaoshishenqing(id,organize,active_name,name,num,class,time,reason,began_time,end_time,tel,place,status,teacher) values ('$count','$organize','$active_name','$name','$num','$class','$time','$reason','$began_time','$end_time','$tel','$place','$status','$teacher')");
        if($check)
           echo "<script>alert('提交成功');history.go(-1);</script>";
        else
           echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if($type=="yan_things_order")
	{
		$qid = mysql_query("select count(*) as total from yan_things_order ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$name=$_POST['name'];
		$num=$_POST['num'];
		$status=0;
		$tel=$_POST['tel'];
		$things_type=$_POST['things_type'];
		$time=$_POST['time'];
		$note=$_POST['note'];
		$count++;
		$check = mysql_query("insert into yan_things_order(id,name,num,tel,things_type,time,note,status) values ('$count','$name','$num','$tel','$things_type','$time','$note','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if($type==$ben_place_application)
	{
		$qid = mysql_query("select count(*) as total from tuan_shenqing ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$organize=$_POST['organize'];
		$active_name=$_POST['active_name'];
		$time=date('Y/m/');
		$began_time=date('Y/m/').$_POST['began_time'];
		$end_time=date('Y/m/d').$_POST['end_time'];
		$place=$_POST['place'];
		$reason=$_POST['reason'];
		$status=0;
		$tel=$_POST['tel'];
		$teacher=$_POST['teacher'];
		$check = mysql_query("insert into tuan_shenqing(id,organize,active_name,name,num,class,time,reason,began_time,end_time,tel,place,status,teacher) values ('$count','$organize','$active_name','$name','$num','$class','$time','$reason','$began_time','$end_time','$tel','$place','$status','$teacher')");
		if($check)
		  echo "<script>alert('提交成功');history.go(-1);</script>";
		else
		  echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if ($type=="xueye_my_question") {
		$qid = mysql_query("select count(*) as total from xueye_consult ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$count++;
		$status=0;
		$my_question=$_POST['my_question'];
		$my_question_content=$_POST['my_question_content'];
		$check = mysql_query("insert into xueye_consult(id,name,num,question,questin_content,status) values ('$count','$name','$num','$my_question','$my_question_content','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";

	}else
	if ($type=="slj_print") {
		$qid = mysql_query("select count(*) as total from slj_print ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$status=0;
		if($_POST['c_or_e']==1)
			$c_or_e="中文";
		else
			$c_or_e="英文";
		$time=date('y-m-d');
		$count++;
		$check = mysql_query("insert into slj_print(id,name,num,class,print_type,time,status) values ('$count','$name','$num','$class','$c_or_e','$time','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if ($type=="zxzm_print") {
		$qid = mysql_query("select count(*) as total from zxzm_print ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$status=0;
		if($_POST['c_or_e']==1)
			$c_or_e="中文";
		else
			$c_or_e="英文";
		$time=date('y-m-d');
		$count++;
		$check = mysql_query("insert into zxzm_print(id,name,num,class,print_type,time,status) values ('$count','$name','$num','$class','$c_or_e','$time','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if ($type=="xjzm_print") {
		$qid = mysql_query("select count(*) as total from xjzm_print ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$status=0;
		if($_POST['c_or_e']==1)
			$c_or_e="中文";
		else
			$c_or_e="英文";
		$time=date('y-m-d');
		$count++;
		$check = mysql_query("insert into xjzm_print(id,name,num,class,print_type,time,status) values ('$count','$name','$num','$class','$c_or_e','$time','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}else
	if($type="tuan_ticket")
	{
		$qid = mysql_query("select count(*) as total from tuan_ticket ");
		$res = mysql_fetch_array($qid);
		$count = $res['total'];
		$status=0;
		$count++;
		$active_name=$_POST['active_name'];
		$active_place=$_POST['active_place'];
		$organize=$_POST['organize'];
		$ticket_num=intval($_POST['ticket_num']);
		$active_time=$_POST['active_time'];
		$note=$_POST['note'];
		$check = mysql_query("insert into tuan_ticket(id,active_name,active_place,active_time,organize,ticket_num,note,status) values ('$count','$active_name','$active_place','$active_time','$organize','$ticket_num','$note','$status')");
		if($check)
			echo "<script>alert('提交成功');history.go(-1);</script>";
		else
			echo "<script>alert('提交失败');history.go(-1);</script>";
	}



mysql_close($con);
?>
</body>
</html>