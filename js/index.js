$(window).load(function(){
  $('.cloak').show();
  setup_fullpage();
  if(window.location.hash.length>1){
    $.fn.fullpage.moveTo(window.location.hash.substring(1));
  }
});
