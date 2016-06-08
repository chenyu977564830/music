<?php
/**
 * 
 * 作者： 陈誉 
 * 日期： 2016-06-04 07:16:35
 * 版本： 1.0
 */
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class DistributeOrderController extends Controller {
	//工单分配首页
    public function index(){
    	

    	$this->display();
    }

    //待审核工单页面
    public function waitAudit(){

        //项目名称+工作量的查询
    	$sql="select app_name, count(app_name) number from tbl_basework_order where cr_status=3 and (bqclzt=1 or bqclzt=2) group by app_name";
    	$Model= new Model();
    	$this->data=$Model->query($sql);
        //审核人员的查询（B6角色）
        $field=array('job_id','job_name');
        $this->user=M('user')->field($field)->select();//待角色节点分配后应将此部分完善
    	$this->display();
    }

    //待审核工单分配
    public function waitAuditHandle(){
    	$auditor=I('auditor');//接收数据
    	
    	foreach($auditor as $v){//将传过来的项目名和工号进行重组
    		$arr[]=explode('-',$v);
    	}
    	//加上键名
    	foreach($arr as $v1){
    		$v1['app_name']=$v1[0];
    		$v1['auditor']=$v1[1];
    		$v1['cr_status']=4;
    		$v1['distribute_time']=time();
    		unset($v1[0]);
    		unset($v1[1]);
    		$arr1[]=$v1;
    	}
    	
    	//开启事务
    	$basework=M('basework_order');
    	$basework->startTrans();
    	foreach($arr1 as $v2){//循环更新数据
    		if(!$basework->where(array('app_name'=>$v2['app_name']))->save($v2)){
    			$basework->rollBack();
    			$this->Error('分配失败');
    		}
    	}
    	$basework->commit();
    	$this->success('分配成功',U('index'));
    }
    
    //在审核项目页面
    public function onAudit(){
    	$sql="select app_name, auditor,distribute_time from tbl_basework_order where cr_status=4 and (bqclzt=1 or bqclzt=2) group by app_name";
    	$Model=new Model();
    	$this->data=$Model->query($sql);
    	$this->display();
    }

    //无版权材料项目页面
    public function withoutCr(){
        if(!empty($_SESSION['noCr'])){//如果session['noCr']不存在 则从数据库查询，这个session只有在执行匹配后才会存在
    	   $data=M('basework_order')->field('app_name')->where('bqclzt=3')->group('app_name')->select();
        }else{
            $data=$_SESSION['nocr'];
        }
        $this->data=$data;
    	$this->display();
    }

    //未进行材料匹配页面
    public function noMatch(){
    	$data=M('basework_order')->field('app_name')->where('bqclzt=0')->group('app_name')->select();
        session('app_name',$data);//用完后记得清除
        $this->data=$data;
    	$this->display();
    }

    //执行材料匹配控制器
    public function runMatch(){
       
        if(!empty($_SESSION['app_name'])){
            $data=$_SESSION['app_name'];
            unset($_SESSION['app_name']);//清除session
            foreach ($data as  $v) {//取出项目名称
                $app_name[]=$v['app_name'];
            }
        }else{
            $app_name=$_POST;
        }
       //P($_POST);die;感谢自己的坚持，这个点卡了3个小时
        
        //进行材料匹配
        $successNum=0;//记录匹配成功项目条数
        $falseNum=0;//记录匹配失败项目条数
        for($i=0,$num=count($app_name);$i<$num;$i++){//循环项目匹配
            $content=M('cr_material')->where(array('app_name'=>$app_name[$i]))->find();
            if($content){

                if(M('basework_order')->where(array('app_name'=>$app_name[$i]))->save(array('cr_status'=>3,'bqclzt'=>$content['bqclzt']))){
                    $successNum++;
                }else{
                    $falseNum++;
                }
            }else{
                M('basework_order')->where(array('app_name'=>$app_name[$i]))->save(array('bqclzt'=>3));//将版权材料状态改为3
                session('noCr',$app_name[$i]);//取出无版权材料项目
                $falseNum++;
            }
        }

        $data['status']=1;
        $data['successNum']=$successNum;
        $data['falseNum']=$falseNum;
        $this->ajaxReturn($data);
    }


}