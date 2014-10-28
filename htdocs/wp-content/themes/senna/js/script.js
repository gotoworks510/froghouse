$(function() {
  var pull    = $('#pull');
    menu    = $('#gnavi ul');
    menuHeight  = menu.height();

  $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
});
