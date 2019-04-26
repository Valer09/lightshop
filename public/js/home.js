$(document).ready(function () {
    $('.carousel-frame ul').mousemove(function (e) {
        var container = $(this).parent();
        if ((e.pageX - container.offset().left) < container.width() / 2) {
            var direction = function () {
                container.animate({ scrollLeft: '-=600' }, 1000, 'linear', direction);
            }
            container.stop().animate({ scrollLeft: '-=600' }, 1000, 'linear', direction);
        } else {
            var direction = function () {
                container.animate({ scrollLeft: '+=600' }, 1000, 'linear', direction);
            }
            container.stop().animate({ scrollLeft: '+=600' }, 1000, 'linear', direction);
        }
    }).mouseleave(function () {
        var container = $(this).parent();
        container.stop();
    });
});