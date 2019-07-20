function checkStar(rate) {
    switch (rate) {
        case 1:
            $('.st2').addClass('noChecked');
            $('.st3').addClass('noChecked');
            $('.st4').addClass('noChecked');
            $('.st5').addClass('noChecked');
            $('#ratingStar').val(1);
            break;

        case 2:
            $('.st2').removeAttr('noChecked');
            $('.st3').addClass('noChecked');
            $('.st4').addClass('noChecked');
            $('.st5').addClass('noChecked');
            $('#ratingStar').val(2);
            break;

        case 3:
            $('.st2').removeClass('noChecked');
            $('.st3').removeClass('noChecked');
            $('.st4').addClass('noChecked');
            $('.st5').addClass('noChecked');
            $('#ratingStar').val(3);
            break;

        case 4:
            $('.st2').removeClass('noChecked');
            $('.st3').removeClass('noChecked');
            $('.st4').removeClass('noChecked');
            $('.st5').addClass('noChecked');
            $('#ratingStar').val(4);
            break;

        default:
            $('.st2').removeClass('noChecked');
            $('.st3').removeClass('noChecked');
            $('.st4').removeClass('noChecked');
            $('.st5').removeClass('noChecked');
            $('#ratingStar').val(5);
            break;
    }
}