<?php
namespace Admin\Controller;
use Think\Controller;
class ImportWorkOrderController extends Controller{
	
	//日常工单导入页面；
	public function index(){
		$this->display();
	}

	
	//将Excel上传到服务器并显示
	public function uploadExcel(){
		$upload= new \MyClass\importFile();
		$savePath='./Data/tempExcel/';//指定存储路径
		$filename="excelData";//存放提交文件名
		$upload->upload($savePath,$filename);
		$content=$upload->content;//存放Excel内容
		
		$excelArr=array("savePath"=>$savePath,//可以用来考虑在数据成功导入数据库后将Excel文件清除
						"content"=>$content//用于将内容存放到session，内容插入数据库成功后要清除session
			);
		session('excelArr',$excelArr);

		$this->content=$content;
		$this->col=$upload->col;
		$this->display();
		
		
	}

	//将Excel文件内容插入数据库
	public function excelAdd(){
		if(!IS_AJAX)E('页面不存在');//判断是否是ajax
		//$savePath=$_SESSION['excelArr']['savePath'];
		$content=$_SESSION['excelArr']['content'];//提取excel内容
		//P($content);
		//重组$content，便于数据的插入
		if(!empty($content)){
			$status=5;
			$this->ajaxReturn($status);
			return;
		}
		$dataList=array();//存放重组后的数据
		for($i=2;$i<count($content);$i++){
			$arr=array();
			foreach($content[$i] as $k=>$v){
				$arr[$content[0][$k]]=$v;
			}
			$dataList[]=$arr;
		}
		foreach($dataList as $value){
			if($value['cr_status']==1){
				$status=1;
				$this->ajaxReturn($status);
				return;
			}
		}
		//P($dataList);die;
		//从$dataList取出数据库不存在的cr_id并将其插入数据库;查询cr_id的时候只查询将提交的CPID（公司代码）
		$arr1=array();//存放该公司提交的Excel表中所有的cr_id
		foreach($dataList as $v1){
			$arr1[]=$v1['cr_id'];
			}
		$basework_order=M('basework_order');
		$cp_id=$dataList[0]['cp_id'];
		$arrCr_id=$basework_order->where("cp_id=$cp_id AND cr_status=0")->field(array('cr_id','id'))->select();//存放该公司未被审核的cr_id
		//P($arrCr_id);die;

		$arrCr_id1=array();//去数组层数
		foreach($arrCr_id as $val){
			$arrCr_id1[]=$val['cr_id'];
		}
		//P($arrCr_id1);die;
		$arr2=array();//存放要插入的cr_id
		
		foreach($arr1 as $v2){
			if(in_array($v2,$arrCr_id1)){
				
				$arr2[]=$v2;
			}
		}
		//P($arr2);die;
		//在dataList中将插入和更新的数据分开
		$arr4=array();//存放要插入的数据
		$arr5=array();//存放要更新的数据
		foreach($dataList as $v3){
			
			if(in_array($v3['cr_id'], $arr2)){
				$arr5[]=$v3;
			}else{
				$arr4[]=$v3;
			}
		}

		//处理arr5去除唯一cr_id字段添加主键替换
		$arr6=array();
		foreach ($arr5 as $v4) {
			
			foreach ($arrCr_id as $v6) {
				$arr7=array();
				if($v4['cr_id']==$v6['cr_id']){
					$arr7['id']=$v6['id'];					
					unset($v4['cr_id']);//去掉版权编号，不可修改
					unset($v4['cp_id']);//去掉公司代码，不可修改
					$arr6[]=array_merge($arr7,$v4);
				}
				
			}
			
		}
		//P($arr6);die;
		//事物处理
		$basework_order->startTrans();
		if(!empty($arr4)&&!empty($arr6)){
			if($basework_order->addAll($arr4)){
				foreach($arr6 as $v5){
					//P($v5);die;
					$result=$basework_order->save($v5);
					if($result===false){
						$basework_order->rollBack();
						$status=2;
						$this->ajaxReturn($status);
						
					}
				}
					$basework_order->commit();
					$status=3;
					$this->ajaxReturn($status);
			}else{
				$basework_order->rollBack();
				$status=4;
				$this->ajaxReturn($status);
			}
		}elseif(!empty($arr6)){
			foreach($arr6 as $v5){
					//P($v5);die;
					$result=$basework_order->save($v5);
					if($result===false){
						$basework_order->rollBack();
						$status=2;
						$this->ajaxReturn($status);
						
					}
				}
				$basework_order->commit();
				$status=3;
				$this->ajaxReturn($status);
				

		}else{
			if($basework_order->addAll($arr4)){
				$basework_order->commit();
				$status=3;
				$this->ajaxReturn($status);
			}else{
				$basework_order->rollBack();
				$status=4;
				$this->ajaxReturn($status);
			}

		}

		//var_dump(M('basework_order')->addAll($dataList));die;
		/*if(M('basework_order')->addAll($dataList)===flase){
			$data['status']=0;
			$this->ajaxReturn($data);

		}else{
			$data['status']=1;
			$this->ajaxReturn($data);

		}//由于addALL失败程序直接终止现做如下修改
		//执行数据插入操作
		/*$order=M('basework_order');
		$order->startTrans();
		$num=0;
		foreach($arr as $v1){//循环插入数据
			if($order->add($v1)){
				$num++;
			}	
		}
		if($num==(count($arr)-2)){
			$order->commit();
			$data['status']=1;
			$data['trueNum']=$num;
			$this->ajaxReturn($data);
		}else{
			$order->rollBack();
			$data['status']=0;
			$data['flaseNum']=count($arr)-2-$num;
			$this->ajaxReturn($data);
		}*/
		
	}
}
?>