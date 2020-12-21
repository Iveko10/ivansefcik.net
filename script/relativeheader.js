function fixing_header() {
    
    var windowsScroll = $(this).scrollTop();    
    var div_top = $('#content-anchor').offset().top;
    
    //console.log('scroll ' +windowsScroll);
    //console.log('head ' +$('.header').offset().top);
    if (windowsScroll < div_top){
        console.log('relative');
        $('.header').addClass('is-relative');  
        $('#header-phantom').hide();
    } 
    else {
        $('.header').removeClass('is-relative');
        $('#header-phantom').show();
    }    
}



$(function (){
   $(window).scroll(fixing_header);
    fixing_header();
});