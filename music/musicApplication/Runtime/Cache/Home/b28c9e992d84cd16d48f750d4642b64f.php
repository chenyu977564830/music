<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>工单查询与修改</title>
	<script type="text/javascript" src='/Public/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="/Public/style/layer/layer.js"></script>
	<link rel="stylesheet" href="/Public/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/style/css.css">
</head>
<body>
	<div class="bs-example frame" data-example-id="bordered-table" >
	<p class="bg-primary">工单查询与修改</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <th>工单类型</th>
	          <th>开始时间(yyyymmdd)</th>
	          <th>截止时间(yyyymmdd)</th>
	          <th>操作</th>
	        </tr>
	      </thead>
	      <tbody>
	      	<tr>
	      		<td>在审核工单</td>
	      		<td></td>
	      		<td></td>
	      		<td><a href="/index.php/home/order_status/onAuditFind">查询</a></td>
	      	</tr>
	      	<tr>
	      		<td>待审核工单</td>
	      		<td></td>
	      		<td></td>
	      		<td><a href="/index.php/home/order_status/waitAuditFind">查询</a></td>
	      	</tr>
	      	<tr>
	      		<td>无版权材料工单</td>
	      		<td></td>
	      		<td></td>
	      		<td><a href="/index.php/home/order_status/noCrFind">查询</a></td>
	      	</tr>
	      </tbody>
	    </table>
	</div>
  </div>
</body>
</html>