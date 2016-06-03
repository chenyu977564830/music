<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src='/music/Application/Admin/Public/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="/music/Application/Admin/Public/style/layer/layer.js"></script>
	<link rel="stylesheet" href="/music/Application/Admin/Public/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/music/Application/Admin/Public/style/css.css">
</head>
<body>
	<div class="bs-example frame" data-example-id="bordered-table" >
	
	<p class="bg-primary">添加角色</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <th >ID</th>
	          <th>角色名称</th>
	          <th>角色描述</th>
	          <th>是否锁定</th>
	          <th>操作</th>
	        </tr>
	      </thead>
	      <tbody>
	      <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
	      	   <td ><?php echo ($v["id"]); ?></td>
	      	   <td><?php echo ($v["name"]); ?></td>
	      	   <td><?php echo ($v["remark"]); ?></td>
	      	   <td><?php if($v["status"] == 0): ?>正常<?php else: ?>
	      	   		<span style="color:red">锁定</span><?php endif; ?>
	      	   </td>
	      	   <td><a href="">修改&nbsp;</a><a href="<?php echo U('delRole',array('id'=>$v['id']));?>">|&nbsp;删除</a></td>
	      	</tr><?php endforeach; endif; ?>
	      </tbody>
	    </table>
	    
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
			    url:'addRole',
			    data:{name:$('input[name="name"]').val(),remark:$('textarea[name="remark"]').val(),status:$('input["status"]:checked').val()},
			    dataType:'json',
			    success:function(data){
			      	switch(data.status){
			      		case 1:
			      		layer.msg('添加角色成功');
				      	break;
				      	case 2:
				      	layer.msg('添加角色失败');
				      	break;
				      	
			      	}
			    }
			 })
		})
	})
</script>
</body>
</html>