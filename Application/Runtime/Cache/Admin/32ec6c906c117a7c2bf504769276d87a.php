<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel = "Shortcut Icon" href="/music/Application/Admin/Public/images/favoricon.ico"/> 
    <title>中国移动无线音乐业务版权审核数据管理信息系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Robots" content="noindex,nofollow" />        
    <link type="text/css" href="/music/Application/Admin/Public/css/main.css" rel="stylesheet" />
    <script src="/music/Application/Admin/Public/js/jquery-1.4.4.min.js"></script> 
    <script type="text/javascript" src="/music/Application/Admin/Public/js/login.js"></script>
    <script>
        var URL="/music/index.php/Admin/Login/verify";
    </script> 
    
</head>
<body>
    <div id="container">
    	<div id="login-top">
    		<a href="javascript:void(0);" id="logo-law" title="中国移动通信集团"><img src="/music/Application/Admin/Public/images/logo-mobile.png"></img></a>
			<a href="javascript:void(0);" id="logo-law" title="泰和泰律师事务所"><img src="/music/Application/Admin/Public/images/logo-law.png"></img></a>
    	</div>
        <div id="content">
			<h3>中国移动无线音乐业务版权审核数据管理信息系统</h3>
            <div class="login-mid">
                <form id="frm" method="" action="">
                    <div class="input-content-item">
                        <label for="jobId">工号：</label>
                        <div class="input-content-swap">
                            <input type="text" name="jobId" maxlength=20/>
                        </div>                            
                    </div>
					<div class="input-content-item">
                        <label for="password"> 密码：</label>
                        <div class="input-content-swap">
                            <input type="password" name="password" maxlength=6 />
                        </div>
                    </div>
                    <div class="input-content-item">
                        <label for="validateCode">验证码：</label>
                        <div class="input-content-swap code">
                            <input type="text" name="validateCode" />								
                        </div>
						<img id="img" src="/music/index.php/Admin/Login/verify" class="fl ml5 code-img" onclick="changeCode()" style="cursor:pointer"></img>
                    </div>                        
                    <div class="submit-div fl">
                        <input type="button"  class="btn btn-green mr5" value="登录" onclick="validateCheck()" />
                        <input type="reset" name="reset" class="btn btn-green" value="取消" />
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
            <div id="dialogueBox"></div>
        </div>            
    </div>      
</body>
</html>