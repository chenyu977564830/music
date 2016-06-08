<?php
/**
 * 
 * 作者： 陈誉 
 * 日期： 2016-06-04 19:55:13
 * 版本： 1.0
 */
namespace Home\Controller;
use Think\Controller;
class CrImportController extends Controller {
    
    //版权材料上传页面
    public function index(){
    	$this->display();
    }


	//版权材料添加
	public function crAdd(){
		//系统生成相关参数
		$data=$_POST;
		$data1=M('company')->where(array('cp'=>$_POST['cp']))->field('cp_id')->find();
		$data['cp_id']=$data1['cp_id'];
		$data['cr_materialid']=intval($data['cp_id']).'-'.time().'-'.intval($_SESSION['jobId']);
		$data['receive_time']=time();
		//P($data);

		//判断项目是否存在
		if(M('cr_material')->where(array('app_name'=>$data['app_name']))->find()){
			$this->error('项目名已经存在不可重复添加');

		}else{
			if(M('cr_material')->add($data)){//执行插入操作
				$this->success('添加数据成功',U('index'));

			}else{
				$this->error('添加数据失败');
			}
		}
    


    }
}