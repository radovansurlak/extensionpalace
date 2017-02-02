$("#banner").click(function(){
  $("#newsletter").toggleClass("minimized");
  $("#news-arrow").toggleClass("rotate180")
});

var scrollTriggered = false;

$(window).scroll(function() {
    if ($(this).scrollTop() > 100 && !(scrollTriggered))  {
        $("#newsletter").toggleClass("minimized");
        scrollTriggered = true;
    } else null;
});
