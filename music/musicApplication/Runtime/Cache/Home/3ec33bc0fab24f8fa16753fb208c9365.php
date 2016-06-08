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
	<p class="bg-primary">数据库到服务器</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <?php if(is_array($data0)): foreach($data0 as $k=>$v): ?><th><?php echo ($k); ?></th><?php endforeach; endif; ?>
	        </tr>
	      </thead>
	      <tbody>
	      <?php if(is_array($data1)): foreach($data1 as $key=>$v1): ?><tr>	
		        <?php $__FOR_START_5265__=0;$__FOR_END_5265__=$num;for($i=$__FOR_START_5265__;$i < $__FOR_END_5265__;$i+=1){ ?><td><?php echo ($v1[$i]); ?></td><?php } ?>
	        </tr><?php endforeach; endif; ?>
	      </tbody>
	    </table>
	    <div class="form_box">
			<form action="/Home/DownloadOrder/runDownload">
		    	<div class="but">
		    		<button type="submit" class="btn btn-primary btn-lg btn-block">开始下载</button>
		    	</div>
		    	
		    </form>
    	</div>
	</div>
  </div>
</body>
</html>