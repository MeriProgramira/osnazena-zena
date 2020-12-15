
  $(function() {
    $(window).scroll(function() {
        if($(window).scrollTop() > 50) {
            $("#main-nav").addClass("sticky");
        } else {
            $("#main-nav").removeClass("sticky");
        }
    });
  });
