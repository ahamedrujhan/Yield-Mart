$(function () {
  $('.show-pop').click(function () {
      $('.overly').css({
          transform: 'scale(1)'
      });
      $('body :not(.overly ,.overly *)').css({
          filter: 'blur(10px)'
      })
  });
  $('.close-pop').click(function () {
      $('.overly').css({
          transform: 'scale(0)'
      });
      $('body :not(.overly ,.overly *)').css({
          filter: 'blur(0)'
      })
  });

});