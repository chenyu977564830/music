//这是menu菜单动态效果
$(function() {
    $('#nav > li > a').click(function() {
        if ($(this).attr('class') != 'active') {                        
	    $('#nav li ul').slideUp();						
                $(this).next().slideToggle();						
                $('#nav li a').removeClass('active');
                $(this).addClass('active');
            } else if ($(this).attr('class') == 'active') {
	    $('#nav li ul').slideUp();					 
                $('#nav li a').removeClass('active');                        
            }
     });            
      $('#nav > li > ul > li> a').click(function(){
      $('#nav > li > ul > li> a').removeClass('select')
  if ($(this).attr('class') != 'select'){
      $(this).addClass('select');
  }
}); 
})

