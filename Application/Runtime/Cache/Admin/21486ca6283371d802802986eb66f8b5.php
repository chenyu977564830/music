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
	<div class="bs-example frame" data-example-id="bordered-table">
	<!-- <h2>PHPEXCEL导出excel到数据库</h2> -->
	<p class="bg-primary">PHPEXCEL导出excel到数据库</p>
	<div class="table_box">
		<table class="table table-bordered">
	      <thead>
	        <tr class="active">
	          <th>A</th>
	          <th>B</th>
	          <th>C</th>
	          <th>D</th>
	          <th>E</th>
	          <th>F</th>
	          <th>G</th>
	          <th>H</th>
	          <th>I</th>
	          <th>J</th>
	          <th>K</th>
	          <th>L</th>
	          <th>M</th>
	          <th>N</th>
	          <th>O</th>
	          <th>P</th>
	          <th>Q</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <th class="active">1</th>
	          <td>Mark</td>
	          <td>Otto</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	        </tr>
	        <tr>
	          <th class="active">2</th>
	          <td>Mark</td>
	          <td>Otto</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	        </tr>
	        <tr>
	          <th class="active">3</th>
	          <td>Mark</td>
	          <td>Otto</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	        </tr>
	        <tr>
	          <th class="active">4</th>
	          <td>Mark</td>
	          <td>Otto</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	        </tr>
	        <tr>
	          <th class="active">5</th>
	          <td>Mark</td>
	          <td>Otto</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	        </tr>
	        <tr>
	          <th class="active">6</th>
	          <td>Mark</td>
	          <td>Otto</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	        </tr>
	        <tr>
	          <th class="active">7</th>
	          <td>Mark</td>
	          <td>Otto</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	          <td>@mdo</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
    <div class="form_box">
		<form action="">
	    	<div class="but">
	    		<button type="button" class="btn btn-primary btn-lg btn-block">导出到mysql</button>
	    	</div>
	    	
	    </form>
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
			layer.msg('导入成功');
			// $.ajax({
			//    type:'post',
			//    url:'ajax_mysql.php',
			//    data:data,
			//    dataType:'json',
			//    success:function(data){
			//      	if(data==1){
			//      		layer.msg('导入成功');
			//      	}else if(data==0){
			//      		layer.msg('导入失败');
			//      	}
			//    }
			// })
		})
	})
</script>
</body>
</html>