$(document).ready(function () {
  hiddenElements = $(":hidden");
  visibleElements = $(":visible");

  $(".close-btn").click(function (e) {
    $(".nav-closed").css("transform", "translateX(-100%)");
  });
  $(".burger-btn").click(function (e) {
    $(".nav-closed").css("transform", "translateX(0%)");
  });
});
