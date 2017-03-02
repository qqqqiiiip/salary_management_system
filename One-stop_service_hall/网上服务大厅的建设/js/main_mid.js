		// 自动换图
		(function(fun){
		    $ = fun;
		    $.fn.picShow = function(options){
		        var defaults = {
		        	 timer:"3000"         
		        }
		        var options = $.extend(defaults, options);
		        //获取初始参数
		        var $this = $(this);
		        var $href_id = $($this).find('.img_area').find('a');
		        var $img_id = $($this).find('.img_area').find('img');
		        var $title_id = $($this).find('.pic_title_a');	
				var $pic_ul = $($this).find('.pic_btn_ul');
				var $first = $($pic_ul).find('span').eq(0);
				var timer = options.timer;
				//快捷切换
				var _click = function() {
					$($pic_ul).find('span').on('click',function(event) {
						event.preventDefault();
						if($($pic_ul).find('span').hasClass('pic_span_click')) {
							$($pic_ul).find('span').removeClass('pic_span_click');
						}
						$(this).addClass('pic_span_click');
						var _xsrc = $(this).attr('xsrc');
						var _xtitle = $(this).attr('xtitle');
						var _href = $(this).attr("xhref");
						$($img_id).attr('src', _xsrc);
						$($title_id).html(_xtitle);
						$href_id.attr('href', _href);
					});
				}
				//循环顺序切换
				var _timer = function() {
					var _len = $($pic_ul).find('span').length;
					var _index = $($pic_ul).find('span').index($(".pic_span_click"));
					if((_len-1) > _index) {
						$($pic_ul).find('span').eq(_index + 1).click();
					}else {
						$first.click();
					}
				}
				//暂停
				var _hover = function() {
					$($this).hover(
						function(){
							clearInterval(_move);
						},
						function(){
							_move = setInterval(_timer,timer);  
						}
					);
				}
				_click();
				_timer();
				var _move = setInterval(_timer,timer);
				_hover();
		};
		})(fun);

        function showLogin() {
            var loginDiv = document.getElementById("loginDiv");
            var zhezhao = document.getElementById("zhezhao");
            var clientx = document.documentElement.clientWidth;
            var clienty = document.documentElement.clientHeight;
            var l_margin = (clientx - parseInt(loginDiv.style.width)) / 2;
            var t_margin = (clienty - parseInt(loginDiv.style.height)-100) / 2
            loginDiv.style.left = l_margin + "px";
            loginDiv.style.top = t_margin +"px";
            loginDiv.style.display = "block";
            zhezhao.style.display = "block";
        }
        function hidLogin() {
            var loginDiv = document.getElementById("loginDiv");
            var zhezhao = document.getElementById("zhezhao");
            loginDiv.style.display = "none";
            zhezhao.style.display = "none";
        }
        function titleMove() {
            var moveable = true;
            var loginDiv = document.getElementById("loginDiv");
            //以下变量提前设置好                        var clientX = window.event.clientX;
            var clientY = window.event.clientY;
            var moveTop = parseInt(loginDiv.style.top);
            var moveLeft = parseInt(loginDiv.style.left);
            document.onmousemove = function MouseMove() {
                if (moveable) {
                    var y = moveTop + window.event.clientY - clientY;
                    var x = moveLeft + window.event.clientX - clientX;
                    if (x > 0 && y > 0) {
                        loginDiv.style.top = y + "px";
                        loginDiv.style.left = x + "px";
                    }
                }
            }
            document.onmouseup = function Mouseup() {
                moveable = false;
            }
        }
        window.onload = function() {  
    setTimeout("startmarquee(5, 80, 5, 'rollDiv1')", 1000);
    setTimeout("startmarquee(5, 80, 5, 'rollDiv2')", 1000);  
}
function startmarquee(lh,speed,delay,id) {  

    var t;  
    var p = false;  
    var o = document.getElementById(id);  
    o.innerHTML += o.innerHTML;  
    o.onmouseover = function() {  
        p = true;  
    }  
    o.onmouseout = function() {  
        p = false;  
    }  
    o.scrollTop = 0;  
  
    function start() {  
        t = setInterval(scrolling,speed);  
        if(!p) o.scrollTop += 2;  
    }  
  
    function scrolling() {  
        if(o.scrollTop%lh != 0) {  
            o.scrollTop += 2;  
            if(o.scrollTop >= o.scrollHeight / 2) o.scrollTop = 0;  
        } else {  
            clearInterval(t);  
            setTimeout(start,delay);  
        }  
    }  
    setTimeout(start,delay);  
} 
