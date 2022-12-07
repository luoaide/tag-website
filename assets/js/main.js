// CONVERT WP CLASSES TO BOOTSTRAP DEFAULTS

$(document).ready(function(){

  $(".cat-item").click(function(){
    var path = $(this).children("a").attr("href");
    document.location.href = path;
  });

  $(".menu-item").click(function(){
    var path = $(this).children("a").attr("href");
    document.location.href = path;
  });

  $(".menu-item").mouseenter(function(){
    $(this).children("a").css("color", "#3A82D9");
  });

  $(".menu-item").mouseleave(function(){
    $(this).children("a").css("color", "black");
  });

});
