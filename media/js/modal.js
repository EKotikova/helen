$(function(){
var fx={
'initModel': function(){
	if($('.modal-window').length==0){
	$('<div>').attr('id','jquery-overlay')
	          .fadeIn('show')
			  .appendTo('body');
	               
     return $('<div>').addClass('modal-window').appendTo('body');
	}
	else{
		return $('.modal-window');
	}
	}
}   
$('.pic').bind('click',function(e){
  e.preventDefault;
  date=$(this).attr('image_id');
  modal=fx.initModel();
 $('<a>').attr('href','#')
 .addClass('model-close-btn')
 .html('&times')
 .click(function(event){
    event.preventDefault();
	$('.modal-window').fadeOut('show',function(){
	   $('.modal-window').remove();
	});
	$('#jquery-overlay').fadeOut('show',function(){
	   $('#jquery-overlay').remove();
	});
  }).appendTo(modal);
  $.ajax({
  url: 'ajax.php', type:'POST', data: 'id='+date,
   success:function(mig){
       modal.append(mig);
	},  
	error:function(mig){
	  modal.append(mig);
	}
	//beforeSend:function();
  });
  
 
  


})

});