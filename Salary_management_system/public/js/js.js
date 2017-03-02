    
    //增加员工 start
    var new_name,new_department_id,new_superior_id;

    function x(q,v) {
        if(q==1){
            new_name = v;
        }else if(q == 2){
            new_superior_id = v;
        }else{
            new_department_id = v;
        }
    }
    function isInteger(x) {
        if(x>0&&x<100){
            return true;
        }
        return false;
    }
    function add() {
        if(new_name==""||!isInteger(new_department_id)||!isInteger(new_superior_id)){
            alert('信息有误');
            return ;
        }
        $.ajax({
                type:'post',  
                url:"/add_new", 
                data:{
                'name':new_name,
                'superior_id':new_superior_id,
                'department_id':new_department_id
                },
                dataType: 'json',
                success:function(data){
                    $("#x").click();
                    $('#add').popover('hide')
                }
            }); 
    }
    
    $(function () { 
    $("[data-toggle='popover']").popover();
    });
    //增加员工 end
    
