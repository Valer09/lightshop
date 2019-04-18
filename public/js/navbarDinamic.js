$(function () {
    $(window).scroll(function () {
        //if (window.URL) {
            var somma = screen.height - 50;// i px dopo i quali parte tutto
            if ($(this).scrollTop() >= somma) {
                $(".barDx").css({
                    "color": "#2d3436",
                    "text-shadow": "none",
                });
                $(".barSx").css({
                    "color": "#2d3436",
                    "text-shadow": "none",
                });
                $("#navMar").css({
                    "background-color": "white",
                });
                $("#navMar").addClass("w3-card-4");
            } else if ($(this).scrollTop() < somma) { // se si rientra sotto i px indicti..
                $(".barDx").css({
                    "color": "white",
                    "text-shadow": "3px 2px 10px black",
                });
                $(".barSx").css({
                    "color": "white",
                    "text-shadow": "3px 2px 10px black",
                });
                $("#navMar").css({
                    "background-color": "",
                });
                $("#navMar").removeClass("w3-card-4");
            }
        //}

    });
});
