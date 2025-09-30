//Sticky//
$(document).ready(function() {
jQuery(window).scroll(function () {
var scroll = jQuery(window).scrollTop();
if(jQuery(window).scrollTop() > -0) {
jQuery('.sticky').addClass('fixed');
}
if (jQuery(window).scrollTop() < 50) {
jQuery('.sticky').removeClass('fixed');
}
});
});
//Top//
$(function(){$.fn.scrollToTop=function(){$(this).hide().removeAttr("href");if($(window).scrollTop()!="0"){$(this).fadeIn("slow")}var scrollDiv=$(this);$(window).scroll(function(){if($(window).scrollTop()=="0"){$(scrollDiv).fadeOut("slow")}else{$(scrollDiv).fadeIn("slow")}});$(this).click(function(){$("html, body").animate({scrollTop:0},"slow")})}});     
$(function(){
$("#toTop").scrollToTop();
});


//slider-item//
$('.slider-item').slick({
dots: false,
arrows: false,
infinite: true,
autoplay: true,
draggable: true,
lazyLoad: 'progressive',
autoplaySpeed: 3000,
slidesToShow: 1,
slidesToScroll: 1
});

//slider-item//
$('.major-item-carousel').slick({
dots: false,
arrows: false,
infinite: true,
autoplay: true,
draggable: true,
lazyLoad: 'progressive',
autoplaySpeed: 3000,
slidesToShow: 1,
slidesToScroll: 1
});

//slider-item//
$('.e-mobility-item').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    draggable: true,
    lazyLoad: 'progressive',
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1
    });

//slider-item//
$('.testimonial-slider').slick({
dots: true,
arrows: true,
infinite: true,
autoplay: true,
draggable: true,
lazyLoad: 'progressive',
autoplaySpeed: 3000,
slidesToShow: 1,
slidesToScroll: 1
});
////
$('#counter-block').ready(function(){

$('.solar').animationCounter({
start: 0,
step: 100,
delay:30,
end: 7999,
txt: ' MW'
});
$('.lithium').animationCounter({
start: 0,
end: 5999,
step: 80,
delay: 30,
txt: ' MWh'
});
$('.projects').animationCounter({
start: 0,
step: 2,
delay:30,
end: 119
});
$('.clients').animationCounter({
start: 0,
end: 399,
step: 5,
delay: 30
});
});


//menu//
$(document).ready(function () {
ma5menu({
menu: '.site-menu',
activeClass: 'active',
footer: '#ma5menu-tools',
position: 'left',
closeOnBodyClick: true
});
});