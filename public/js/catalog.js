function filterSelectionxx(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    for (i = 0; i < x.length; i++) {
        if (x[i].className.indexOf(c) > 0) w3RemoveClass(x[i], "noShow");
        else w3AddClass(x[i], "noShow");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}


$(document).ready(function () {
    //Filter
    if ($('.checkFilter:checked').length == 0) {
        $('.filterDiv').addClass('show');
    }
    $(".checkFilter").change(function () {
        if ($('.checkFilter:checked').length == 0) {
            $('.filterDiv').addClass('show');
        }
    });


    //MAXPRIcE
    var max = 0;
    $('.prices').each(function (index, value) {
        var prex = parseFloat(value.textContent);
        if (prex > max) max = prex;
    });

    //slider price
    $("#js-range-slider").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: max,
        from: 1,
        to: max,
        prefix: "€"
    });


    /** FILTER */
    $("#js-range-slider").change(function () {
        filter()
    });

    $('.checkFilter').click(function () {
        filter();
    });

    function filter() {
        var reg = ($("#js-range-slider").val()).split(";");
        var min = parseFloat(reg[0]);
        var max = parseFloat(reg[1]);
        var allUnchecked = $('.checkFilter:checked').length == 0;

        $('.filterDiv').each(function (index, divE) {
            var vars = divE.getAttribute('value').split('/');
            var id = vars[0];
            var brand = vars[1];
            var price = vars[2];

            var brandChecked = $('#filter-' + brand).prop('checked');

            var clas = divE.getAttribute('class');

            if (price >= min && price <= max && (brandChecked || allUnchecked)) {
                if (clas.search('show') < 0) {
                    divE.setAttribute('class', clas + ' show');
                }
            } else {
                if (clas.search('show') > 0) {
                    divE.setAttribute('class', clas.replace('show', ''));
                }
            }
        });
    }
    /**end FILTER */
});

