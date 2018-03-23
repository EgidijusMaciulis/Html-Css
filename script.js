//var sandwich = document.getElementById('sandwich');
//var mobileMenu = document.getElementById('mobileMenu');
//
//sandwich.addEventListener('click', function(){
//    if (mobileMenu.style.left == "0px"){
//        mobileMenu.style.left = "-200px";
//    } else {
//        mobileMenu.style.left = "0px";
//    }
//    
//});

$(function(){
//    $("nav .leftSide li").addClass('active');
    
    $("header h4").css("color", "red");
    
    $("header .shoe").fadeOut();
    
    $("nav .leftSide li").click(function(){
        $('header .shoe').fadeIn();
        
        $('header .leftSide li').removeClass('active');
        $(this).addClass('active');
    });
    
    $(".scroll").click(function(){
        $("html, body").animate({
            scrollTop: $('.feat2').offset().top
        }, 1500);
    });
});