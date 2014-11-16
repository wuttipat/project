$().ready(function(){
    $('.nav').click(function(){
        setMenuBackgroundDefault();
        $(this).css('background', 'url(images/menu_arrow.gif) no-repeat top center');
    });
});

function setMenuBackgroundDefault(){
    $('.nav').css('background', '');
}
