function ArrowClick() {
    $('html, body').animate({
        scrollTop: $("#works").offset().top
    }, 1000);
}
$(document).scroll(function () {
    var scrollPos = $(document).scrollTop();
    var targetOpacity = 1;
    if (($(window).height() / 2  ) < scrollPos) {
        targetOpacity = scrollPos / 1000 + 0.2;
        if (targetOpacity < 0.9) {
            $(".transparent").css("background-color", "rgba(245, 93, 85," + targetOpacity + ")");
        }
        else {
            $(".transparent").css("background-color", "rgba(245, 93, 85,0.9)");
        }
    }
    else {
        $(".transparent").css("background-color", "rgba(0,0,0,0)");
    }
});

