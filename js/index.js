jQuery(function($) {
var $item = $('.carousel-item');
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight);
$item.addClass('full-screen');

$('.carousel-item img').each(function() {
  var $src = $(this).attr('src');
  $('.carousel-item').css({
    'background-image' : 'url(' + $src + ')',
  });
});

$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight);
});

$('.carousel').carousel({
  interval: 6000,
  pause: "false"
});
});
