jQuery(document).ready(function($){
    setTimeout(function(){
        $('.popup-wrapper').fadeIn();
    }, 500);

    $('.close').click(function(){
        $('.popup-wrapper').fadeOut();
    });
});