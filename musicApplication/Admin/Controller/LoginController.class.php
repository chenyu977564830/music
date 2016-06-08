<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	//登陆页面显示
    public function index(){
	    $this->display(); 
	    }

	//连接数据库验证登陆
	public function login(){

	}
}