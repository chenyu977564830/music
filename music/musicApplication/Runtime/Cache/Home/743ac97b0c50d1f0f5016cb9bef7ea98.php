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
	<p class="bg-primary">工单项目分类</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <th>分类</th>
	          <th>操作</th>
	      	</tr>    
	      </thead>
	      <tbody>
	      	<tr align="center">
	      		<td >待匹配材料项目</td>
	      		
	      		<td><a href="/music/index.php/Home/DistributeOrder/noMatch">查看</a></td>
	      	</tr>
	      	<tr align="center">
	      		<td>待审核项目</td>
	      		
	      		<td><a href="/music/index.php/Home/DistributeOrder/waitAudit">查看</a></td>
	      	</tr>
	      	<tr align="center">
	      		<td>在审核项目</td>
	      		
	      		<td><a href="/music/index.php/Home/DistributeOrder/onAudit">查看</a></td>
	      	</tr>
	      	<tr align="center">
	      		<td>无版权材料项目</td>
	      		
	      		<td><a href="/music/index.php/Home/DistributeOrder/withoutCr">查看</a></td>
	      	</tr>
	      </tbody>
	    </table>
	</div>
   
   
  </div>

</body>
</html>