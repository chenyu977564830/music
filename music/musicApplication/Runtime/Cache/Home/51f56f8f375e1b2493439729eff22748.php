<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <link type="text/css" href="/music/Public/css/main.css" rel="stylesheet" />
        <script type="text/javascript">
            function tick() {
         	   var hours, minutes, seconds, xfile;
         	   var intHours, intMinutes, intSeconds;
         	   var today, theday;
         	   today = new Date();
         	   function initArray(){
         	   this.length=initArray.arguments.length
         	   for(var i=0;i<this.length;i++)
         	   this[i+1]=initArray.arguments[i] }
         	   var d=new initArray(" 星期日"," 星期一"," 星期二"," 星期三"," 星期四"," 星期五"," 星期六");
         	   theday = [today.getYear()+1900]+"年" + [today.getMonth()+1]+"月" +today.getDate()+"日" + d[today.getDay()+1];
         	   intHours = today.getHours();
         	   intMinutes = today.getMinutes();
         	   intSeconds = today.getSeconds();
         	   if (intHours == 0) {
         	   hours = "12:";
         	   xfile = " 午夜 ";
         	   } else if (intHours < 12) {
         	   hours = intHours+":";
         	   xfile = " 上午 ";
         	   } else if (intHours == 12) {
         	   hours = "12:";
         	   xfile = " 正午 ";
         	   } else {
         	   intHours = intHours - 12
         	   hours = intHours + ":";
         	   xfile = " 下午 ";
         	   }
         	   if (intMinutes < 10) {
         	   minutes = "0"+intMinutes+":";
         	   } else {
         	   minutes = intMinutes+":";
         	   }
         	   if (intSeconds < 10) {
         	   seconds = "0"+intSeconds+" ";
         	   } else {
         	   seconds = intSeconds+" ";
         	   }
         	   timeString = theday+xfile+hours+minutes+seconds;
         	   Clock.innerHTML = timeString;
         	   window.setTimeout("tick();", 100);
         	   }
         	   window.onload = tick;
   function winclose(){
	   window.top.opener=null;
	   window.top.open('', '_self', ''); 
	   window.top.close(); 
	   }
        	
        </script>
    </head>
    <body>	     
		 <table style="width:100%; font-size:15px;">
	     <tr>
		    <td>&nbsp;&nbsp;&nbsp;&nbsp;祝&nbsp;&nbsp;<?php echo ($_SESSION['name']); ?>&nbsp;&nbsp;工作顺利！&nbsp;&nbsp;| &nbsp;&nbsp;<a href="logout.php" onclick="winclose();">退出</a></td>
		    <td style="text-align:right;"><div id="Clock" align="right" style="font-size:15px; color:#000000"></div></td>
			<td style="width:50px;"><a href="download/help.doc"> &nbsp; |&nbsp;帮助</a></td>
		 </tr>
		 </table>	  
    </body>
</html>