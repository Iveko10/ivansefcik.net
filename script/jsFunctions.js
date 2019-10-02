
function focused(){
    document.getElementById("rollmenu").style.display="block";
}

function unfocused(){
    document.getElementById("rollmenu").style.display="none";
}

function addClassScript(){
    $('.thank-you').addClass('success');
}

$(window).ready(function(){
    
    //mobile navigator btn
    $(".nav-btn").on("click", function(){
        $("#headerPolozky").toggleClass("open");
    });    
    
    
    var wScroll = $(this).scrollTop(); 
    if(wScroll == 0){   //example - contact page
        if(wScroll > $('.content-text-fade').offset().top - ($(window).height() / 1.2)) {
            $('.content-text-fade').addClass('is-showing');        
        }
        if(wScroll > $('.header-animation').offset().top - ($(window).height() / 1.2)) {
            $('.header-animation').addClass('start');
        }
    }
});

//window scroll functions 
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();    
    
    if(wScroll > $('.content-text-fade').offset().top - ($(window).height() / 1.2)) {
        $('.content-text-fade').addClass('is-showing');
    }
    
    //iv-photo.png header animation
    if(wScroll > $('.header-animation').offset().top - 20){
        //$('.header-animation').css({backgroundColor: 'pink'}); 
        $('.header-animation').addClass('start');
    }
        

    //gallery thumb animation
    if(pageNameString == 'index'){
        if(wScroll > $('#gallery-thumbs').offset().top - ($(window).height() / 1.35)){
            $('.gallery-item').each(function(i){
                setTimeout(function(){
                    $('.gallery-item').eq(i).addClass('is-showing');
                }, 300*(i+1));
            });
        }
    }    
        
    //fade welcome-logo
    if(pageNameString == 'index'){
    	if(wScroll <= $(window).height()){
        	if(wScroll > $('.para-box2').offset().top - ($(window).height())){                 
			    //console.log('fade');
                $('.welcome-bcgr').css({'transform': 'translate(-50%, '+ (-50 + -(wScroll/8)) +'%)'});
            
            	/*  Sloppy version  - fade welcome-logo         
            	//
            	var offset = Math.max(0, wScroll - $('.para-box2').offset().top + $(window).height() - 165);
            	//var offset = wScroll;
            	offset = -(offset)/8;
            	console.log('offset ' +offset);
            
            	$('.welcome-bcgr').css({'transform': 'translate(-50%, '+ (-50 + offset) +'%)'});
            	*/
        	}
    	}
    }
    
    
    
    
    
    
    
    
    //fixnutie headeru pomocou jquery
    /*
    if (wScroll > $('.header').offset().top){
        //console.log('above header');
        $('.header').addClass('is-fixed');
    }
    
    if (wScroll < $('.para-box2').offset().top){
        //console.log('under header');
        $('.header.is-fixed').removeClass('is-fixed');
    }
    */
});