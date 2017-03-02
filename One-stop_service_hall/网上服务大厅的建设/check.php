<?php

$username=$_POST['name'];

$con = mysql_connect("localhost","root","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('onestep-stage', $con);
$check_query = mysql_query("SELECT username from login where username='$username' limit 1");  
if($result = mysql_fetch_array($check_query)){  
    echo"0";
    exit;  
}

   echo "1";

?>