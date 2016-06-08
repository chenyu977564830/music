<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src='/Public/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="/Public/style/layer/layer.js"></script>
	<link rel="stylesheet" href="/Public/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/style/css.css">
</head>
<body>
	<div class="bs-example frame" data-example-id="bordered-table" >
	<!-- <h2>工单分配</h2> -->
	<p class="bg-primary">上传工单</p>
	<div class="table_box">
	<form id="addform" name="addform" " action="/index.php/home/import_work_order/uploadExcel" method="post" enctype="multipart/form-data">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
		     	<th align="right">上传工单</th>
				<th> <input id="lefile" type="file"  name="excelData" ></th>
	      	</tr>
	      	<tr class="active">
		     	<th align="right">上传复审工单</th>
				<th> <input id="lefile" type="file"  name="excelDataAgain" ></th>
	      	</tr>  
	      </thead>
	    
	      <tbody>
	      <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
		      	<td><?php echo ($v["app_name"]); ?></td>
		      </tr><?php endforeach; endif; ?>

	      </tbody>
	    </table>
	   <div class="form_box">
			
		    	<div class="but">
		    		<input type="submit" class="btn btn-primary btn-lg btn-block" value="开始上传" />
		    	</div>
		    	
		</form>
    	</div>
	</div>
   
   
  </div>
  

</body>
</html>