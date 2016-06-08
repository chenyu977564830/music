<?php
/**
 * 
 * 作者： 陈誉 
 * 日期： 2016-06-06 12:04:27
 * 版本： 1.0
 */
namespace Myclass;

class  download{
	
	//文件下载方法弹窗式下载
	public function downloadExcel($content,$filename){
		import('Org.Util.PHPExcel');//引入PHPExcel类库
		$phpObj=new \PHPExcel();//实例化对象
		$phpWriter=new \PHPExcel_writer_Excel2007($phpObj);//实例化写对面
		
		//取出键名
		$contentKey[]=array_keys($content[0]);
		$num=count($content[0]);
		//P($contentKey);die;
		//去除键名
		$content1=array();
		foreach($content as $v){
			$content1[]=array_values($v);

		}
		//将键名压入数组
		
		$content1=array_merge($contentKey,$content1);
		//P($content1);die;
		//为数组添加索引
		
		
		foreach($content1 as $k1=>$v1){
			$v2=array();
			$currentColumn = 'A';
			for ($i = 1; $i <= $num; $i++) {
			    $v2[$currentColumn++.($k1+1)]=$v1[$i-1];
			    }
			$content2[]=$v2;	
		}
		//P($content2);die;
		//循环向表中插值
		$currentsheet=$phpObj->setActiveSheetIndex(0);//设置当前工作表
		foreach($content2 as $v3){
			foreach($v3 as $k=>$v4){	
				$currentsheet->setCellValue($k,$v4);
			}
		}
		//保存输出
		ob_end_clean();
		header("Content-Type:application/vnd.ms-excel;");
		header('Content-Disposition:attachment;filename='.$filename.'.xlsx');
		header("Cachr-Control: max-age=0");
		$phpWriter->save('php://output');

	}    
    
}