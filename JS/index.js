$(document).ready(function () {
  $(window).on("mousemove", function (e) {
    var presentOfset = $(".ripple-effect").offset(),
      relX = e.pageX - presentOfset.left,
      relY = e.pageY - presentOfset.top;

    $(".ripple-effect").find("span").css({
      top: relY,
      left: relX
    });
  });
