$().ready(function(){
    $('.nav').click(function(){
        setMenuBackgroundDefault();
        $(this).css('background', 'url(images/menu_arrow.gif) no-repeat top center');
        
    });
});

function setMenuBackgroundDefault(){
    $('.nav').css('background', '');
}

function getAjax(url){
	$('.middle_content').fadeOut(500, function(){
		$.get(url, {}, function(data){
			$('.middle_content').html(data);
			$('.middle_content').fadeIn(500);
		});
	});
}
