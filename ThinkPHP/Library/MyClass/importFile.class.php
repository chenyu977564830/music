<?php
/**
 * 
 * 作者： 陈誉 
 * 日期： 2016-05-30 21:34:11
 * 版本： 1.0
 */
namespace MyClass;

class importFile{

    var $content;
    var $col;

	//文件上传到服务器
	 public function upload($savePath,$filename){
    
        header("Content-Type:text/html;charset=utf-8");
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('xls', 'xlsx');// 设置附件上传类
        $upload->rootPath  =	'./';//设置网站上传根目录
        $upload->savePath  =      $savePath; // 设置附件上传目录
        // 上传文件
        $info     =   $upload->uploadOne($_FILES[$filename]);//将文件上传返回信息存于$info
        $filePath = $info['savepath'].$info['savename'];
        
        $exts = $info['ext'];//存放上传文件类型
        //P($info);die;
        if(!$info) {// 上传错误提示错误信息
              $this->error($upload->getError());
          }else{// 上传成功调用导入的方法
              $this->import($filePath,$exts);
        }
    }
    //读取文件内容
	 protected function import($filePath, $exts){
    
        
        import("Org.Util.PHPExcel");//导入PHPExcel类库，因为PHPExcel没有用命名空间，只能import导入
                
        if($exts == 'xls'){//如果excel文件后缀名为.xls，导入这个类
            import("Org.Util.PHPExcel.Reader.Excel5");
            $phpReader=new \PHPExcel_Reader_Excel5();
        }else if($exts == 'xlsx'){
            import("Org.Util.PHPExcel.Reader.Excel2007");
            $phpReader=new \PHPExcel_Reader_Excel2007();
        }
        
        
        $phpExcel=$phpReader->load($filePath);//载入文件
        $currentSheet=$phpExcel->getActiveSheet(0);//获取第0个工作表的内容
        $content=$currentSheet->toArray();
        $this->content=$content;
        $this->col=$currentSheet->getHighestColumn();
    }
      
}
?>