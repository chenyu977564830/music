<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//自动执行的方法
	public function _initialize(){
		if(!$_SESSION['name']||!$_SESSION['jobId']){
			$this->redirect('Login/index');
		}
	}
/*	//这是框架集的首页
    public function index(){
		
	    $this->display(); 

	}

	//这是top页面
	public function top(){
		$this->display();
	}

	//这是这是welcome页面
	public function welcome(){
		$this->display();
	}

	//这是menu页面
	public function menu(){
		$this->display();
	}
*/
	//empty方法优化页面显示
	public function _empty(){
		$this->display(ACTION_NAME);
	}
}