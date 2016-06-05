<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>工单下载</title>
	<script type="text/javascript" src='/music/Public/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="/music/Public/style/layer/layer.js"></script>
	<link rel="stylesheet" href="/music/Public/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/music/Public/style/css.css">
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
		        <?php $__FOR_START_7863__=0;$__FOR_END_7863__=$num;for($i=$__FOR_START_7863__;$i < $__FOR_END_7863__;$i+=1){ ?><td><?php echo ($v1[$i]); ?></td><?php } ?>
	        </tr><?php endforeach; endif; ?>
	      </tbody>
	    </table>
	    <div class="form_box">
			<form action="">
		    	<div class="but">
		    		<button type="button" class="btn btn-primary btn-lg btn-block">开始下载</button>
		    	</div>
		    	
		    </form>
    	</div>
	</div>
   
   
  </div>
<script type="text/javascript">
	$(function(){
		$('td').hover(function() {
			$(this).addClass('success');			
		}, function() {
			$(this).removeClass('success');
		});
		$('th.active').hover(function(){
			$(this).parent().addClass('success');
		},function(){
			$(this).parent().removeClass('success');
		})
		$('.btn').click(function(){
			//layer.msg('导入成功');
			 $.ajax({
			    type:'post',
			    url:'/music/index.php/Home/DownloadOrder/runDownload',
			    //data:data,
			    dataType:'json',
			    success:function(status){
			      	switch(status){
			      		case 1:
			      		layer.msg('不能修改审核状态');
				      	break;
				      	case 2:
				      	layer.msg('更新数据失败');
				      	break;
				      	case 3:
				      	layer.msg('更新及插入数据成功');
				      	break;
				      	case 4:
				      	layer.msg('插入数据失败，操作失败');
				      	break;
				      	case 5:
				      	layer.msg('没数据导入个毛线');
				      	break;
				      	case 6:
				      	layer.msg('更新数据成功');
				      	break;
				      	case 7:
				      	layer.msg('插入数据成功');
				      	break;

			      	}
			    }
			 })
		})
	})
</script>
</body>
</html>