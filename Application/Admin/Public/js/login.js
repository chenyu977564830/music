//这是登陆页面的js代码
//验证输入是否合法
//定义输入的值
$(function() { 
	$('input[name="jobId"]').val('');
	$('input[name="password"]').val('');
	$('input[name="validateCode"]').val('');
});

//改变验证码
function changeCode(){
	
	$('#img').attr("src",URL+'/'+Math.random());
	return false;
}

//登陆验证提示页面        
function showMsg(msg) {
	var content = '<div class="body_wrapper" id="body_wrapper"></div>' +
                  '<div class="tips_box" id="tips_box">' + 
                     '<h5><b class="fl">系统消息</b><a href="javascript:void(0);" class="close">&nbsp;</a></h5>' +
                     '<p class="ag_left tips_ptxt">' + msg + '<br /><input type="button" id="OK" value="OK" class="Submit_button fr mgt10" onClick="myClose(\'' + msg + '\');" /></p>' +
                  '</div>'; 
	    $('#dialogueBox').html(content);      		    
}

//验证数据
 function validateCheck() {
 	
    var msg = ''; 		           		            	
	if ($('input[name="jobId"]').val() == '') {	        		
		msg = '请输入工号！';	        		
		showMsg(msg);	
		return false;        		
	}

	if ($('input[name="password"]').val() == '') {	        		
		msg = '请输入密码！';
		showMsg(msg);
		return false;
	}

	if ($('input[name="validateCode"]').val() == '') {	        		
		msg = '请输入验证码！';
		showMsg(msg);
		return false;
	} else {
		//var params = $('input[name="validateCode"]').serialize();
		$.ajax({
			type : "post",
			url : "Login/login",
			async : false,
			dataType : 'json',
			data : {jobId:$('input[name="jobId"]').val(),password:$('input[name="password"]').val(),validateCode:$('input[name="validateCode"]').val()},
			error : function() {
				
			},
			success : function(data) {
				if (data.status==1) {
					var msg="登陆成功";
					showMsg(msg);
					window.location="http://localhost/music/index.php/Admin/Index/index";
					return false;
				} else if(data.status==2){
					var msg="验证码错误！";
					showMsg(msg);
					return false;
				}else if(data.status==3){
					var msg="用户名或密码错误！";
					showMsg(msg);
					return false;
				}else{
					$('#frm').submit();
					$(this).attr("disabled", "disabled");
					return true;
				}
			}
		});
	}        	

}
function myClose(msg) {                
	if($('#body_wrapper').length>0) $('#body_wrapper').hide();
	if($('#tips_box').length>0) $('#tips_box').hide();   
	if(msg=='请输入工号！') $('input[name="jobId"]').focus();
	if(msg=='请输入密码！') $('input[name="password"]').focus();   
	if(msg=='请输入验证码！'||msg=='请输入正确的验证码！') $('input[name="validateCode"]').focus();            	        	         
}
