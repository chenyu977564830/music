<?php
/**
 * 
 * 作者： 陈誉 
 * 日期： 2016-06-05 17:13:08
 * 版本： 1.0
 */
namespace Home\Controller;
use Think\Controller;
class DownloadOrderController extends Controller {
    
	//个人项目列表页面
    public function index(){
    	$field=array('app_name','cr_status');
    	$this->data=M('basework_order')->where(array('auditor'=>$_SESSION['jobId']))->field($field)->group('app_name')->order('distribute_time DESC')->select();
    	//P($data);
    	$this->display();
    }
    

    //下载工单页面
    public function download(){
    	$app_name=I('app_name');
    	$data=M('basework_order')->where("app_name='$app_name'")->select();
    	session('downloadExcel',$data);//存session用于下载，下载完成后记得清除session
    	$data0=$data[0];
    	$this->data0=$data0;//分配字段
    	$this->num=count($data0);//分配循环次数
    	
    	//P($data);die;
    	//将data的内容进行处理以便模板循环
    	$data1=array();
    	foreach($data as $v){
    		$v=array_values($v);
    		$data1[]=$v;
    	}
    	//P($data1);die;
    	$this->data1=$data1;//分配内容
    	$this->display();
    }


    //执行下载
    public function runDownload(){

    	$data=$_SESSION['downloadExcel'];
    	P($data);
    }
}