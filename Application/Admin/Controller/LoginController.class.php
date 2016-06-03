<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	//登陆页面显示
    public function index(){
	    $this->display(); 
	    }

	//连接数据库验证登陆
	public function login(){
		
		if(!IS_AJAX)E('页面不存在');
		
		$verify = new \Think\Verify();    
		if($verify->check(I('validateCode'))){
			$user=M('user')->where(array('job_id'=>I('jobId')))->find();
			//P($user);die;
			if($user&&$user['job_pwd']==I('password')){
				session('jobId',$user['job_id']);
				session('id',$user['id']);
				$data['status']=1;

				$this->ajaxReturn($data);

			}else{
				$data['status']=3;
				$this->ajaxReturn($data);
			}
		}else{
			$data['status']=2;
			$this->ajaxReturn($data);
		}
		
		

	}
		

	//生成验证码
	public function verify(){
		//验证码的配置参数
		$config =array(     'fontSize'    =>    30,    // 验证码字体大小    
							'length'      =>    3,     // 验证码位数    
							'useNoise'    =>    false, // 关闭验证码杂点
					);
		$Verify=new \Think\Verify($config);
		$Verify->entry();
	}
}
?>