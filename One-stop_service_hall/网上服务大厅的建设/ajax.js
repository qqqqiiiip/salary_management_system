function showResult(str,type,database)
						{
							if(type==1)
							{
								if (str.length==0)
								{
								document.getElementById("livesearch").innerHTML="";
								return;
								}
								if (window.XMLHttpRequest)
								{// code for IE7+, Firefox, Chrome, Opera, Safari
								xmlhttp=new XMLHttpRequest();
								}
								else
								{// code for IE6, IE5
								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
								}
								xmlhttp.onreadystatechange=function()
								{
								if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
								document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
								}
								}
								xmlhttp.open("GET","livesearch.php?q="+str+"&type="+type+"&database="+database,true);
								xmlhttp.send();
							}else
							if (type==2) 
							{
								if (str.length==0)
								{
								document.getElementById("question").innerHTML="";
								document.getElementById("answer").innerHTML="";
								return;
								}
								if (window.XMLHttpRequest)
								{// code for IE7+, Firefox, Chrome, Opera, Safari
								xmlhttp=new XMLHttpRequest();
								}
								else
								{// code for IE6, IE5
								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
								}
								xmlhttp.onreadystatechange=function()
								{
								if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
									var kk= xmlhttp.responseText;
								//返回规定格式的字符串1,2
								strs=kk.split(",");
								document.getElementById("question").innerHTML=strs[0];
								document.getElementById("answer").innerHTML=strs[1];
								}
								}
								xmlhttp.open("GET","livesearch.php?q="+str+"&type="+type+"&database="+database,true);
								xmlhttp.send();
							};
						}