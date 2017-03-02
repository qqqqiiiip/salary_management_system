<?php

		session_start(); 
	    mysql_query("set names utf8");//设置编码格式 
	    session_unset();
		session_destroy();
		echo"<script>history.go(-1);</script>";


?>