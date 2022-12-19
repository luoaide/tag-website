// CONVERT WP CLASSES TO BOOTSTRAP DEFAULTS

$(document).ready(function(){

  $(".menu-item").click(function(){
    var path = $(this).children("a").attr("href");
    document.location.href = path;
  });

});
