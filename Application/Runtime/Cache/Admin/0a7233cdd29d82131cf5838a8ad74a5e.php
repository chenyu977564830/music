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
	          <th>角色名称：</th>
	          <td><input type="text" name="name" /></td>
	      </thead>
	      <tbody>
	      	<tr>
	      	  <th>角色描述：</th>
	      	  <td><input type="text" name="remark" /></td>
	      	</tr>
	      	<tr>
	      	  <th>是否锁定</th>
	      	  <td >是：<input type="radio" name="status" value="1" />&nbsp;&nbsp;否：<input type="radio" name="status" checked="checked" value="0" /></td>		
	      	  	
	      	</tr>
	      </tbody>
	    </table>
	    <div class="form_box">
			<form action="">
		    	<div class="but">
		    		<button type="button" class="btn btn-primary btn-lg btn-block">确认添加</button>
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
			    url:'addRole',
			    data:{name:$('input[name="name"]').val(),remark:$('input[name="remark"]'),status:$('input["status"]')}
			    dataType:'json',
			    success:function(status){
			      	switch(status){
			      		case 1:
			      		layer.msg('审核状态不能为1，操作失败');
				      	break;
				      	case 2:
				      	layer.msg('更新数据失败，操作失败');
				      	break;
				      	case 3:
				      	layer.msg('操作成功');
				      	break;
				      	case 4:
				      	layer.msg('插入数据失败，操作失败');
				      	case 5:
				      	layer.msg('没数据导入个毛线');
			      	}
			    }
			 })
		})
	})
</script>
</body>
</html>