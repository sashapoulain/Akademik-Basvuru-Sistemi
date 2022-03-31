(function() {
    $('.menu-link-wrapper').on('click.mobileNav', function(){
        $('.sidebar').animate({width: 'toggle'},0);
        $('.menu-link-wrapper .menu-link').toggleClass('menu-trigger-open');
        var sidebarstatus = $('#wrap').hasClass('sidebar-active');
        if(sidebarstatus==true){
            $('#wrap').removeClass('sidebar-active');
        }else{
            $('#wrap').addClass('sidebar-active');   
        }
    });
})();

//responsive ekran 768 den büyükse...
function menu(){
    if($(window).width()>700){
        $('.sidebar').show();
        $('#wrap').addClass('sidebar-active');
        $('.menu-link').addClass('menu-trigger-open');
    }else{
        $('.sidebar').hide();
        $('#wrap').removeClass('sidebar-active');
        $('.menu-link').removeClass('menu-trigger-open');
    }
}

$(document).ready(function(){
    menu();

    $(".full-screen-open a").click(function(){
       $('body').fullscreen();
       $('body').addClass('fullscreen');
       return false 
    });
    $(".full-screen-close a").click(function(){
       $.fullscreen.exit();
       $('body').removeClass('fullscreen');
       return false 
    });
});

window.onresize = function (event){
    menu();
}



var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
})
