<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src='/music/Public/style/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src="/music/Public/style/layer/layer.js"></script>
	<link rel="stylesheet" href="/music/Public/style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/music/Public/style/css.css">
	<style>input{ border-style:none; background-color:#FFF; width:590px;margin-left:20px}</style>
</head>
<body>
	<div class="bs-example frame" data-example-id="bordered-table" >
	<!-- <h2>工单分配</h2> -->
	<p class="bg-primary">版权材料入库登记</p>
	<div class="table_box">
	<form id="addform" name="addform" " action="/music/index.php/Home/CrImport/crAdd" method="post" enctype="multipart/form-data">
		<table class="table table-bordered">
	      <thead>
	        <tr class="">
				<th width="5">公司名称</th>
				<td><input type="text" name="cp" /></td>
			</tr>
			<tr>
				<th>项目名称</th>
				<td><input type="text" name="app_name" /></td>
			</tr>
			<tr>
				<th>版权提供者</th>
				<td><input type="text" name="cr_offer" /></td>
			</tr>
			<tr>
				<th>项目类型</th>
					<td><select name="cr_type">
		  				<option value="0" selected="selected">日常</option>
		  				<option value="1">日常紧急</option>
		  				<option value="2">延期</option>
		  				<option value="3">认领</option>
		  			</select></td>
		  	</tr>
		  	<tr>	
				<th>歌曲数量</th>
				<td><input type="text" name="sing_num" /></td>
			</tr>
			<tr>
				<th>版权材料记载项目名称</th>	
				<td><input type="text" name="cr_appname" style="height: 40px" /></td>
			</tr>
			<tr>
				<th>版权材料载体类型</th>
					<td>
		  				<input type="radio" name="bqclzt" value="1"  style="width:5px;"/>纸质&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  				<input type="radio" name="bqclzt" value="2" style="width:5px;" />电子
		  			</td>
	          </tr>
	        <tr>
	          	<th>存放位置</th>
	      		<td><input type="text" name="save_path" /></td>
	      	</tr>    
	      </thead>
	    </table>
	   <div class="form_box">
			
		    	<div class="but">
		    		<input type="submit" class="btn btn-primary btn-lg btn-block" value="登记入库" />
		    	</div>
		    	
		</form>
    	</div>
	</div>
   
   
  </div>
  

</body>
</html>