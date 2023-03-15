var $poster = $('#card-container'),
  $shine = $('.shine'),
  w = $(window).width(),
  h = $(window).height();

$(window).on('mousemove', function(e) {
  var offsetX = 0.5 - e.pageX / w,
    offsetY = 0.5 - e.pageY / h,
    dy = e.pageY - h / 2,
    dx = e.pageX - w / 2,
    theta = Math.atan2(dy, dx),
    angle = theta * 180 / Math.PI - 90,
    offsetPoster = $poster.data('offset'),
    transformPoster = 'translateY(' + -offsetX * offsetPoster + 'px) rotateX(' + (-offsetY * offsetPoster) + 'deg) rotateY(' + (offsetX * (offsetPoster * 2)) + 'deg)';

  if (angle < 0) {
    angle = angle + 360;
  }
  $shine.css('background', 'linear-gradient(' + angle + 'deg, rgba(0,0,0,' + (e.pageY / h /5)  + ') 0%,rgba(0,0,0,.25) 80%)');

  $poster.css('transform', transformPoster);
});