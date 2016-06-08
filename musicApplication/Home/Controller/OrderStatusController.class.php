<?php
/**
 * 
 * 作者： 陈誉 
 * 日期： 2016-06-06 14:48:36
 * 版本： 1.0
 */
namespace Home\Controller;
use Think\Controller;
class orderStatusController extends Controller {

	//工单查询页面
	public function index(){
		$this->display();
	}
    
    //在审核工单查询
    public function onAuditFind(){
    	$this->display();
    }
    
    //待审核工单查询
    public function waitAuditFind(){
    	$this->display();
    }

    //无版权材料工单查询
    public function noCrFind(){
    	$this->display();
    }
}