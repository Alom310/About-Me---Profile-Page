/////////Scroll Functin///////////
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 0);
        return false;
    });
});

////////////burger function//////////////
function myFunction(x) {
    x.classList.toggle("change");
};

$('.menu').on('click', function(){
    $('.sidenav').toggle('slow')
});

//////////scroll fade in//////////////
$(window).scroll(function() {
    // 100 = The point you would like to fade the nav in.
    if ($(window).scrollTop() > 50 ){
        
        $('#headwrap').addClass('show');
        
    } else {
        
        $('#headwrap').removeClass('show');
        
    };   	
});

$('#flip').on('click', function(e) {
	e.preventDefault();
	
	$('#card').toggleClass('flipped');
});