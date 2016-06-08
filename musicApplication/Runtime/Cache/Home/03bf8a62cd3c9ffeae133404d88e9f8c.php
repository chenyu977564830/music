<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src='/music/Public/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="/music/Public/style/layer/layer.js"></script>
	<link rel="stylesheet" href="/music/Public/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/music/Public/style/css.css">
</head>
<body>
	<div class="bs-example frame" data-example-id="bordered-table" >
	<!-- <h2>工单分配</h2> -->
	<p class="bg-primary">待审核项目（可进行分配）</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <th>项目名称</th>
	          <th>工作量</th>
	          <th>分配审核人员</th>
	      	</tr>    
	      </thead>
	    <form action="/music/index.php/Home/DistributeOrder/waitAuditHandle" method="post">
	      <tbody>
	      <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
		      	<td><?php echo ($v["app_name"]); ?></td>
		      	<td><?php echo ($v["number"]); ?></td>
		      	<td><select name="auditor[]">
		      	<?php if(is_array($user)): foreach($user as $key=>$v1): ?><option value="<?php echo ($v["app_name"]); ?>-<?php echo ($v1["job_id"]); ?>" selected="selected"><?php echo ($v1["job_name"]); ?></option><?php endforeach; endif; ?>
		      	</select></td>
		      	
		      </tr><?php endforeach; endif; ?>
	      </tbody>
	    </table>
	    <div class="form_box">
			
		    	<div class="but">
		    		<input type="submit" class="btn btn-primary btn-lg btn-block" value="执行分配" />
		    	</div>
		    	
		</form>
    	</div>
	</div>
   
   
  </div>
  

</body>
</html>