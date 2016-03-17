$('#fullpage').fullpage({
  menu: 'nav',
  anchors: sections,
  paddingTop: '50px',
  verticalCentered: false,
  afterLoad: function(anchorLink, index){
    var reinsertClassOfChildren = function(elem){
      if($(elem).hasClass('animated')){
        var classes = $(elem).attr('class');
        $(elem).attr('class', '');
        //magic
        $(elem).offset($(elem).offset());
        $(elem).attr('class', classes);
        $(elem).removeClass('hidden');
      }
      $(elem).children().each(function(){
        reinsertClassOfChildren(this);
      });
    }
    reinsertClassOfChildren(this);
  },
  onLeave: function(){
    var hideChildren = function(elem){
      if($(elem).hasClass('animated')){
        $(elem).addClass('hidden');
      }
      $(elem).children().each(function(){
        hideChildren(this);
      });
    };
    hideChildren(this);
  }
});
