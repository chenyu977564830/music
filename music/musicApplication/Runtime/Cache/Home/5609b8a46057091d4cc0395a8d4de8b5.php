<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src='http://www.music.com/Public/Home/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="http://www.music.com/Public/Home/style/layer/layer.js"></script>
	<link rel="stylesheet" href="http://www.music.com/Public/Home/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://www.music.com/Public/Home/style/css.css">
</head>
<body>
	<div class="bs-example frame" data-example-id="bordered-table" >
	<!-- <h2>工单分配</h2> -->
	<p class="bg-primary">未进行材料匹配项目</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <th>项目名称</th>
	          
	      	</tr>    
	      </thead>
	    <form action="" method="post">
	      <tbody>
	      <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
		      	<td><?php echo ($v["app_name"]); ?></td>
		      </tr><?php endforeach; endif; ?>

	      </tbody>
	    </table>
	   <div class="form_box">
			
		    	<div class="but">
		    		<input type="button" class="btn btn-primary btn-lg btn-block" value="执行材料匹配" />
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
			    url:'runMatch',
			    //data:data,
			    dataType:'json',
			    success:function(data){
			      	var msg;
			      	msg=data['successNum']+'条匹配成功'+'<br/>'+data['falseNum']+'条匹配失败';
			      	layer.msg(msg);
			      	}
			    
			 })
		})
	})
</script>

</body>
</html>