<?php
/**
 * 
 * 作者： 陈誉 
 * 日期： 2016-06-02 13:30:55
 * 版本： 1.0
 */
namespace Admin\Controller;
use Think\Controller;
class RbacController extends Controller {
	//用户列表
	public function index(){

	}
    
    //添加用户
    public function addUser(){

    }

    //角色列表
    public function role(){
    	$this->role=M('role')->select();
    	$this->display();

    }

    //添加角色页面
    public function addRolePage(){
    	
    	$this->display();
    }

    //添加角色
    public function addRole(){
    	if(!IS_AJAX)E("页面不存在");
    	$data=array(
    		'name'=>I('name'),
    		'remark'=>I('remark'),
    		'status'=>I('status')
    		);

    	if(M('role')->add($data)){
    		$data['status']=1;
    		$this->ajaxReturn($data);
    	}else{
    		$data['status']=0;
    		$this->ajaxReturn($data);
    	}
    }

    //删除角色
    public function delRole(){
    	if(M('role')->where(array('id'=>I('id')))->delete()){
    		$this->success('删除成功');
    	}else{
    		$this->Error('删除失败');
    	}
    }

    //节点列表
    public function node(){

    }

    //添加节点
    public function addNode(){

    }
}