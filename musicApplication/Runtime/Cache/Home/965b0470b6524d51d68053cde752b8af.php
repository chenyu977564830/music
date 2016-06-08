<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--[if lt IE 9]>    
    <script src="js/ie9.js"></script>    
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Robots" content="noindex,nofollow" />        
    <link type="text/css" href="/Public/css/main.css" rel="stylesheet" />
    <script src="/Public/js/jquery-1.4.4.min.js"></script>
    <script src="/Public/js/menu.js"></script>
</head>
<body>
    <div id="menu-left-box">        
        <div id="menu-left-content">
            <ul id="nav">
                <li id="lidaily">
                    <a href="#Menu=ChildMenu1" onclick="DoMenu('ChildMenu1')">日常紧急项目管理</a>
                    <ul id="ChildMenu1" class="collapsed">
                        <li id="lidaily1">
                            <a href="/index.php/Home/ImportWorkOrder/index" target="mainframe">工单数据导入</a>
                        </li>
                        <li id="lidaily2">
                            <a href="/index.php/Home/DistributeOrder/index" target="mainframe">工单分配</a>
                        </li>
			            <li id="lidaily3">
                            <a href="/index.php/Home/DownloadOrder/index" target="mainframe">工单下载</a>
                        </li>
                        <li id="lidaily4">
                            <a href="/index.php/Home/OrderStatus/index" target="mainframe">工单修改/查询</a>
                        </li>                       
			            <li id="lidaily5">
                            <a href="module/daily_manage/work.order.discomplete.php" target="mainframe">项目完结状态</a>
                        </li>
                        <li id="lidaily6">
                            <a href="module/daily_manage/daily.audit.import.php" target="mainframe">审核数据导入</a>
                        </li>
                        <li id="lidaily7">
                            <a href="module/daily_manage/daily.audit.modify.php" target="mainframe">审核数据修改</a>
                        </li>
                        <li id="lidaily8">
                            <a href="module/daily_manage/daily.audit.query.php" target="mainframe">审核数据查询</a>
                        </li>                                                
                    </ul>
                </li>
                <li id="licopy">
                    <a href="#Menu=ChildMenu2" onclick="DoMenu('ChildMenu2')">版权材料管理</a>
                    <ul id="ChildMenu2" class="collapsed">
                        <li id="licopy1">
                            <a href="/index.php/Home/CrImport/index" target="mainframe">入库登记</a>
                        </li>
                        <li id="licopy2">
                            <a href="module/copyright_manage/copyright.storage.php" target="mainframe">归档登记</a>
                        </li>
                        <li id="licopy3">
                            <a href="module/copyright_manage/copyright.stmodify.file.php" target="mainframe">修改/归档</a>
                        </li>
                        <li id="licopy4">
                            <a href="module/copyright_manage/copyright.query.php" target="mainframe">查询</a>
                        </li>                       
                    </ul>
                </li>
                <li id="lidis">
                    <a href="#Menu=ChildMenu3" onclick="DoMenu('ChildMenu3')">版权纠纷管理</a>
                    <ul id="ChildMenu3" class="collapsed">
                        <li id="lidis1">
                            <a href="module/disputecase_manage/dispute.import.php" target="mainframe">案件数据导入</a>
                        </li>
			            <li id="lidis2">
                            <a href="module/disputecase_manage/dispute.insert.php" target="mainframe">案件登记</a>
                        </li>						 
			            <li id="lidis3">
                           <a href="module/disputecase_manage/dispute.modify.file.php" target="mainframe">案件登记修改/处理</a>
                        </li>                        
                        <li id="lidis4">
                            <a href="module/disputecase_manage/dispute.query.php" target="mainframe">版权纠纷查询</a>
                        </li>
                        <li id="lidis5">
                            <a href="module/disputecase_manage/litigation.song.out.php" target="mainframe">导出涉诉歌曲</a>
                        </li>
                        <li id="lidis6">
                            <a href="module/disputecase_manage/litigation.song.insert.php" target="mainframe">涉诉歌曲录入</a>
                        </li>
                        <li id="lidis7">
                          <a href="module/disputecase_manage/litigation.song.import.php" target="mainframe">涉诉歌曲审核导入</a>
                        </li>
                         <li id="lidis8">
                            <a href="module/disputecase_manage/litigation.song.modify.php" target="mainframe">涉诉歌曲修改</a>
                        </li>
                        <li id="lidis9">
                            <a href="module/disputecase_manage/litigation.song.query.php" target="mainframe">涉诉歌曲查询</a>
                        </li>
                    </ul>
                </li>
                <li id="liext">
                    <a href="#Menu=ChildMenu4" onclick="DoMenu('ChildMenu4')">延期版权审核管理</a>
                    <ul id="ChildMenu4" class="collapsed">
                        <li id="liext1">
                           <a href="module/extension_audit_manage/ext.worder.import.php" target="mainframe">延期工单数据导入</a>
                        </li>
                        <li id="liext2">
                            <a href="module/extension_audit_manage/ext.worder.assign.php" target="mainframe">延期工单分配</a>
                        </li>
                        <li id="liext3">
                            <a href="module/extension_audit_manage/ext.worder.down.php" target="mainframe">延期工单下载</a>
                        </li>
                        <li id="liext4">
                          <a href="module/extension_audit_manage/ext.worder.modify.php" target="mainframe">延期工单修改/查询</a>
                        </li>
                        <li id="liext5">
                           <a href="module/extension_audit_manage/ext.worder.discomplete.php" target="mainframe">未完结项目</a>
                        </li>
                         <li id="liext6">
                            <a href="module/extension_audit_manage/ext.audit.import.php" target="mainframe">延期审核数据导入</a>
                        </li>
                        <li id="liext7">
                            <a href="module/extension_audit_manage/ext.audit.modify.php" target="mainframe">延期审核数据修改</a>
                        </li>
                        <li id="liext8">
                           <a href="module/extension_audit_manage/ext.audit.view.php" target="mainframe">延期审核数据查询</a>
                        </li>
                    </ul>
                </li>
				<li id="lichaim">
                    <a href="#Menu=ChildMenu5" onclick="DoMenu('ChildMenu5')">认领版权审核管理</a>
                    <ul id="ChildMenu5" class="collapsed">
                        <li id="lichaim1">
                            <a href="module/chaim_audit_manage/chaim.worder.import.php" target="mainframe">认领工单数据导入</a>
                        </li>
                        <li id="lichaim2">
                            <a href="module/chaim_audit_manage/chaim.worder.assign.php" target="mainframe">认领工单分配</a>
                        </li>
                        <li id="lichaim3">
                            <a href="module/chaim_audit_manage/chaim.worder.down.php" target="mainframe">认领工单下载</a>
                        </li>
                        <li id="lichaim4">
                            <a href="module/chaim_audit_manage/chaim.worder.modify.php" target="mainframe">认领工单修改</a>
                        </li>
                        <li id="lichaim5">
                            <a href="module/chaim_audit_manage/chaim.worder.view.php" target="mainframe">认领工单查询</a>
                        </li>
                        <li id="lichaim6">
                            <a href="module/chaim_audit_manage/chaim.worder.discomplete.php" target="mainframe">未完结项目</a>
                        </li>
                        <li id="lichaim7">
                            <a href="module/chaim_audit_manage/chaim.audit.import.php" target="mainframe">认领审核数据导入</a>
                        </li>      
                        <li id="lichaim8">
                            <a href="module/chaim_audit_manage/chaim.audit.modify.php" target="mainframe">认领审核数据修改</a>
                        </li>
                        <li id="lichaim9">
                            <a href="module/chaim_audit_manage/chaim.audit.view.php" target="mainframe">认领审核数据查询</a>
                        </li>
                    </ul>
                </li>
                <li id="linewcp">
                    <a href="#Menu=ChildMenu6" onclick="DoMenu('ChildMenu6')">新CP管理</a>
                    <ul id="ChildMenu6" class="collapsed">
                        <li id="linewcp1">
                            <a href="module/new_cp_manage/new.cp.import.php" target="mainframe">项目工单导入</a>
                        </li>
                        <li id="linewcp2">
                            <a href="module/new_cp_manage/new.cp.insert.php" target="mainframe">项目工单登记</a>
                        </li>
                         <li id="linewcp3">
                            <a href="module/new_cp_manage/new.cp.worder.assign.php" target="mainframe">工单分配</a>
                        </li>
                        <li id="linewcp4">
                            <a href="module/new_cp_manage/new.cp.worder.down.php" target="mainframe">工单下载</a>
                        </li>
                        <li id="linewcp5">
                            <a href="module/new_cp_manage/new.cp.worder.modify.php" target="mainframe">工单修改/查询</a>
                        </li>
                        <li id="linewcp6">
                            <a href="module/new_cp_manage/declare.song.import.php" target="mainframe">导入申报歌曲</a>
                        </li>
                        <li id="linewcp7">
                            <a href="module/new_cp_manage/declare.song.insert.php" target="mainframe">申报歌曲录入</a>
                        </li>
                        <li id="linewcp8">
                            <a href="module/new_cp_manage/declare.song.modify.php" target="mainframe">申报歌曲修改/查询</a>
                        </li>
			            <li id="linewcp9">
                            <a href="module/new_cp_manage/new.cp.audit.import.php" target="mainframe">审核数据导入</a>
                        </li>
                        <li id="linewcp10">
                            <a href="module/new_cp_manage/new.cp.audit.modify.php" target="mainframe">审核数据修改</a>
                        </li>
                        <li id="linewcp11">
                            <a href="module/new_cp_manage/new.cp.audit.view.php" target="mainframe">审核数据查询</a>
                        </li>
                    </ul>
                </li>
				<li id="licp">
                    <a href="#Menu=ChildMenu7" onclick="DoMenu('ChildMenu7')">CP资料库</a>
                    <ul id="ChildMenu7" class="collapsed">
                        <li id="licp1">
                            <a href="module/cp_information/cp.info.import.php" target="mainframe">CP信息导入</a>
                        </li>
                        <li id="licp2">
                            <a href="module/cp_information/cp.info.insert.php" target="mainframe">CP信息录入</a>
                        </li>
                        <li id="licp3">
                            <a href="module/cp_information/cp.info.modify.php" target="mainframe">CP信息修改</a>
                        </li>
                        <li id="licp4">
                            <a href="module/cp_information/cp.info.view.php" target="mainframe">CP信息查询</a>
                        </li>                       
                    </ul>
                </li>
				<li id="liother">
                    <a href="#Menu=ChildMenu8" onclick="DoMenu('ChildMenu8')">其他审核项目管理</a>
                    <ul id="ChildMenu8" class="collapsed">
                        <li id="liother1">
                            <a href="module/other_manage/other.insert.php" target="mainframe">项目数据录入</a>
                        </li>
                        <li id="liother2">
                            <a href="module/other_manage/other.modify.php" target="mainframe">项目数据修改/查询</a>
                        </li>
                    </ul>
                </li>
	            <li id="listat">
                    <a href="#Menu=ChildMenu9" onclick="DoMenu('ChildMenu9')">统计管理</a>
                    <ul id="ChildMenu9" class="collapsed">                       
                        <li id="listat1">
                           <a href="module/statistics_manage/daily.audit.statistics.php" target="mainframe">日常紧急项目统计</a>
                        </li>                      
                        <li id="listat2">
                            <a href="module/statistics_manage/copyright.statistics.php" target="mainframe">版权材料统计</a>
                        </li>
                        <li id="listat3">
                            <a href="module/statistics_manage/disputecase.statistics.php" target="mainframe">版权纠纷统计</a>
                        </li>
                        <li id="listat4">
                            <a href="module/statistics_manage/ext.audit.statistics.php" target="mainframe">延期版权统计</a>
                        </li>
                        <li id="listat5">
                            <a href="module/statistics_manage/chaim.audit.statistics.php" target="mainframe">认领版权统计</a>
                        </li>
			            <li id="listat6">
                            <a href="module/statistics_manage/newcp.audit.statistics.php" target="mainframe">新CP审核统计</a>
                        </li>
			             <li id="listat7">
                            <a href="module/statistics_manage/cpinfo.statistics.php" target="mainframe">CP信息统计</a>
                        </li>
                        <li id="listat8">
                            <a href="module/statistics_manage/song.search.statistics.php" target="mainframe">歌曲状态搜索</a>
                        </li>
                    </ul>
                </li>
				<li id="lisys">
                    <a href="#Menu=ChildMenu10" onclick="DoMenu('ChildMenu10')">系统维护</a>
                    <ul id="ChildMenu10" class="collapsed">
                        <li id="lisys1">
                            <a href="module/system_maintenance/user.new.php" target="mainframe">用户列表</a>
                        </li>
                        <li id="lisys2">
                            <a href="/index.php/Home/Rbac/role" target="mainframe">角色列表</a>
                        </li>                      
			            <li id="lisys3">
                            <a href="module/system_maintenance/user.password.modify.php" target="mainframe">节点列表</a>
                        </li>
                        <li id="lisys4">
                            <a href="module/system_maintenance/delete.cmslog.php" target="mainframe">添加用户</a>
                        </li>
                        <li id="lisys5">
                            <a href="/index.php/Home/Rbac/addRolePage" target="mainframe">添加角色</a>
                        </li>
                        <li id="lisys6">
                            <a href="module/system_maintenance/delete.cmslog.php" target="mainframe">添加节点</a>
                        </li>
                        <li id="lisys7">
                            <a href="module/system_maintenance/delete.cmslog.php" target="mainframe">清理数据</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <script type=text/javascript>           
            var LastLeftID = "";
            function menuFix(){
                var obj = document.getElementById("nav").getElementsByTagName("li");               
                for (var i = 0; i < obj.length; i++) {
                    obj[i].onmouseover = function(){
                        this.className += (this.className.length > 0 ? " " : "") + "sfhover";
                    }
                    obj[i].onMouseDown = function(){
                        this.className += (this.className.length > 0 ? " " : "") + "sfhover";
                    }
                    obj[i].onMouseUp = function(){
                        this.className += (this.className.length > 0 ? " " : "") + "sfhover";
                    }
                    obj[i].onmouseout = function(){
                        this.className = this.className.replace(new RegExp("( ?|^)sfhover\\b"), "");
                    }
                }
            }
            
            function DoMenu(emid){
                var obj = document.getElementById(emid);
                obj.className = (obj.className.toLowerCase() == "expanded" ? "collapsed" : "expanded");
                if ((LastLeftID != "") && (emid != LastLeftID)) //关闭上一个Menu
                {
                    document.getElementById(LastLeftID).className = "collapsed";
                }
                LastLeftID = emid;
            }
            
            function GetMenuID(){
                var MenuID = "";
                var _paramStr = new String(window.location.href);
                var _sharpPos = _paramStr.indexOf("#");
                
                if (_sharpPos >= 0 && _sharpPos < _paramStr.length - 1) {
                    _paramStr = _paramStr.substring(_sharpPos + 1, _paramStr.length);
                }
                else {
                    _paramStr = "";
                }               
                if (_paramStr.length > 0) {
                    var _paramArr = _paramStr.split("&");
                    if (_paramArr.length > 0) {
                        var _paramKeyVal = _paramArr[0].split("=");
                        if (_paramKeyVal.length > 0) {
                            MenuID = _paramKeyVal[1];
                        }
                    }
                }               
                if (MenuID != "") {
                    DoMenu(MenuID)
                }
            }            
            GetMenuID(); //*这两个function的顺序要注意一下，不然在Firefox里GetMenuID()不起效果
            menuFix();          
        </script>
    </div>
</body>
</html>