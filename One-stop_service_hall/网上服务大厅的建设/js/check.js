    //验证用户名 1-12位
    function checkna(){
        var na=document.getElementById('username').value;
        if( na.length <1 || na.length >12)  
        {  
            divname.innerHTML='<font class="tips_false">*</font>';
             return false ;
        }else{  
            divname.innerHTML='<font class="tips_true">*</font>';        
        }
        for(i=0;i < na.length;i++)
        {
            if(na.charAt(i)==' ')
            {
                divname.innerHTML='<font class="tips_false">*</font>';
                return false;
            }
        }  
    
  }
  //验证密码 由字母或数字组成 1-12位
    function checkpsd1(){    
        psd1=document.getElementById('password').value;
        var flagZM=false ;
        var flagSZ=false ; 
        var flagQT=false ;
        if(psd1.length<1 || psd1.length>12){   
            divpassword1.innerHTML='<font class="tips_false">*</font>';
            return false ;
        }else
            {   
              for(i=0;i < psd1.length;i++)   
                {    
                    if((psd1.charAt(i) >= 'A' && psd1.charAt(i)<='Z') || (psd1.charAt(i)>='a' && psd1.charAt(i)<='z')) 
                    {   
                        flagZM=true;
                    }
                    else if(psd1.charAt(i)>='0' && psd1.charAt(i)<='9')    
                    { 
                        flagSZ=true;
                    }else    
                    { 
                        flagQT=true;
                    }   
                }   
                if(!flagZM && !flagSZ || flagQT){
                divpassword1.innerHTML='<font class="tips_false">*</font>';
                return false ; 
                 
                }else{
                    
                divpassword1.innerHTML='<font class="tips_true">*</font>';
                 
                }  
             
            }   
    }
    //验证确认密码 
    function checkpsd2(){ 
            if(form1.yourpass.value!=form1.yourpass2.value) { 
                 divpassword2.innerHTML='<font class="tips_false">您两次输入的密码不一样</font>';
            } else { 
                 divpassword2.innerHTML='<font class="tips_true">输入正确</font>';
            }
    }
    //验证邮箱
    
    function checkmail(){
                apos=form1.youremail.value.indexOf("@");
                dotpos=form1.youremail.value.lastIndexOf(".");
                if (apos<1||dotpos-apos<2) 
                  {
                    divmail.innerHTML='<font class="tips_false">输入错误</font>' ;
                  }
                else {
                    divmail.innerHTML='<font class="tips_true">输入正确</font>' ;
                }
    }
    //验证用户名+密码是否合法
    function confirm (argument) {
        if(checkna()!=0&&checkpsd1()!=0)
        {
            return true ;
        }
        else
        {
            return false ;
        }
    }
    function isempty(argument) {
        var na=document.getElementById('suggestion').value;
        if(na.length==0)
        {
           return false ;
        }
        else
            return true;
    }
    function lookup(inputString) {
        if(inputString.length == 0) {
            // Hide the suggestion box.
            $('#suggestions').hide();
        } else {
            $.post("rpc.php", {queryString: ""+inputString+""}, function(data){
                if(data.length >0) {
                    $('#suggestions').show();
                    $('#autoSuggestionsList').html(data);
                }
            });
        }
    } // lookup
     
    function fill(thisValue) {
        $('#inputString').val(thisValue);
        setTimeout("$('#suggestions').hide();", 200);
    }
    
