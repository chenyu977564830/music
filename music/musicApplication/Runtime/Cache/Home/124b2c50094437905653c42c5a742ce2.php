<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>工单下载</title>
	<script type="text/javascript" src='http://www.music.com/Public/Home/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="http://www.music.com/Public/Home/style/layer/layer.js"></script>
	<link rel="stylesheet" href="http://www.music.com/Public/Home/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://www.music.com/Public/Home/style/css.css">
</head>
<body>
	<div class="bs-example frame" data-example-id="bordered-table" >
	<p class="bg-primary">个人项目列表</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <th>项目名称</th>
	          <th>完成状态</th>
	          <th>操作</th>
	      </thead>
	      <tbody>
	      	<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
		      		<td><?php echo ($v["app_name"]); ?></td>
		      		<td><?php switch($v["cr_status"]): case "1": ?>完成<?php break;?>
						<?php case "4": ?><i style="color:red;">未完成</i><?php break; endswitch;?></td>
		      		<td><a href="<?php echo U('download',array('app_name'=>$v['app_name']));?>">查看</a></td>
		      	</tr><?php endforeach; endif; ?>
	      </tbody>
	    </table>
	</div>
  </div>
</body>
</html>