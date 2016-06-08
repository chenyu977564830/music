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
    	//unset($_SESSION['downloadExcel']);//注释掉的原因是因为同一页面点击两次的时候下载文件找不到内容和名字
    	//处理unix时间截；
    	foreach($data as $value){
    		$value['distribute_time']=date('Y-m-d H:m:s',$value['distribute_time']);
    		$data[]=$value;
    	}
    	//excel文件名取名为项目名称
    	$filename=$data[0]['app_name'];
    	//P($data);
    	//引入download类
    	$download=new \MyClass\download();//实例化对象
    	$download->downloadExcel($data,$filename);

    }
}