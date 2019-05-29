if ($(window).width() > 1150) {
    
    $('.menu-bar').on('click' ,function(){
        $(this).fadeOut(100);
        $('.close-menu').fadeIn(200);
        $('.dark-mask').fadeIn(300);
        $('.nav-wrapper').animate({right:'75px'},400);
    
    });

    $('.close-menu').on('click' ,function(){
        $(this).fadeOut(100);
        $('.menu-bar').fadeIn(200);
        $('.dark-mask').fadeOut(300);
        $('.nav-wrapper').animate({right:'-195px'},400); 
    });

 }else{

    $('.menu-bar').on('click' ,function(){
        $(this).fadeOut(100);
        $('.close-menu').fadeIn(200);
        $('.dark-mask').fadeIn(300);
        $('#site-wrapper').animate({right:'80px'},400);
        $('.nav-wrapper').animate({right:'0px'},400);
    
    });

    $('.close-menu').on('click' ,function(){
        $(this).fadeOut(100);
        $('.menu-bar').fadeIn(200);
        $('.dark-mask').fadeOut(300);
        $('#site-wrapper').animate({right:'0px'},400);
        $('.nav-wrapper').animate({right:'-270px'},400); 
    });
 }





$('#datepicker').datepicker({
    language: 'en',
    minDate: new Date()
});



$('.user-nav').click(function(){
  $('.user-nav ul').slideToggle(300);
});
$('.user').click(function(){
$('.user-nav').slideToggle(200);
});





// Jquery LightBox
var $thumbs = $('.lightbox a');
$thumbs.simpleLightbox({
    caption : true,
    captionSelector : 'self',
    captionType: 'attr',
    captionsData : 'title',

});



$("#menu-navigation ul li a:first").addClass("active");


 $('#menu-navigation ul li').on('click', function() {
     $('#menu-navigation ul li a').removeClass('active');
     $(this).find('a').addClass('active');
 });

$('#option-bkash').on('click', function() {
    $("#form-bkash").slideDown();
    $("#form-cod").slideUp();
});

$('#option-cod').on('click', function() {
    $("#form-bkash").slideUp();
    $("#form-cod").slideDown();
});

$('.success-message,.error-message').delay(300).fadeOut(800);