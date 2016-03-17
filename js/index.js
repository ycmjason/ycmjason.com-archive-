$(window).load(function(){
  $('.cloak').show();
  setup_fullpage();
  $.fn.fullpage.moveTo(window.location.hash.substring(1));
});
