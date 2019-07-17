$(document).ready(function () {
    /**CHECKOUT METHOD */
    if ($('#billing-address-select').val() == '') {
        $('#billing-new-address-form').show();
    } else {
        $('#billing-new-address-form').hide();
        if (true) {
            $('#shipping-address-select').val($('#billing-address-select').val());
        }
    }

    $('#billing-address-select').on('change', function () {
        if (this.value == '') {
            $('#billing-new-address-form').show();
        } else {
            $('#billing-new-address-form').hide();
            $('#addressBilling').html($('#billing-address-select option:selected').text());
            if (true) {
                $('#shipping-address-select').val($('#billing-address-select').val());
            }
        }
    });

    /**Shipping Information */
    $('#shipping-address-select').on('change', function () {
        if (this.value == '') {
            $('#shipping-new-address-form').show();
        } else {
            $('#shipping-new-address-form').hide();
            $('#addressShipping').html($('#shipping-address-select option:selected').text());
        }
    });

    /**Payment Information */
    $('#co-billing-form input[name=payment]').on('change', function () {
        if ($('#p_method_ccsave:checked').val() == 'ccsave') {
            $('#payment_form_ccsave').show();
        } else {
            $('#payment_form_ccsave').hide();
        }
    });

    /**open step with query */
    var urlParams = new URLSearchParams(location.search);
    console.log(urlParams.get('step'));
    if (urlParams.get('step') != null) {
        switch (urlParams.get('step')) {
            case 'shipping':
                activeStep('shipping');
                disableStep('billing');
                disableStep('shipping_method');
                disableStep('payment');
                disableStep('review');
                break;
            case 'shipping_method':
                disableStep('shipping');
                disableStep('billing');
                activeStep('shipping_method');
                disableStep('payment');
                disableStep('review');
                break;
            case 'payment':
                disableStep('shipping');
                disableStep('billing');
                disableStep('shipping_method');
                activeStep('payment');
                disableStep('review');
                break;
            case 'review':
                disableStep('shipping');
                disableStep('billing');
                disableStep('shipping_method');
                disableStep('payment');
                activeStep('review');
                break;
            default:
                disableStep('shipping');
                activeStep('billing');
                disableStep('shipping_method');
                disableStep('payment');
                disableStep('review');
                break;
        }
    }

    //Change hash
    $(window).on('hashchange', function () {
        var hash = window.location.hash.replace('#', '');;
        if (hash != null) {
            switch (hash) {
                case 'shipping':
                    activeStep('shipping');
                    disableStep('billing');
                    disableStep('shipping_method');
                    disableStep('payment');
                    disableStep('review');
                    break;
                case 'shipping_method':
                    disableStep('shipping');
                    disableStep('billing');
                    activeStep('shipping_method');
                    disableStep('payment');
                    disableStep('review');
                    break;
                case 'payment':
                    disableStep('shipping');
                    disableStep('billing');
                    disableStep('shipping_method');
                    activeStep('payment');
                    disableStep('review');
                    break;
                case 'review':
                    disableStep('shipping');
                    disableStep('billing');
                    disableStep('shipping_method');
                    disableStep('payment');
                    activeStep('review');
                    break;
                default:
                    disableStep('shipping');
                    activeStep('billing');
                    disableStep('shipping_method');
                    disableStep('payment');
                    disableStep('review');
                    break;
            }
        }
    });

    $('#priceShipping').html('<a href="checkout?step=shipping_method"><span style="color: #ea8685">Select shipping method</span></a>');
    var priceShipping = 0;
    $('#co-billing-form input[name=courier]').on('change', function () {
        priceShipping = $('input[name=courier]:checked').attr('class').split("€")[1];
        $('#priceShipping').html(priceShipping);

        var subTot = $('#priceSubtotal').text().toString().replace(',', '.');
        var disc = $('#priceDiscount').text().toString().replace(',', '.');
        var ship = priceShipping.toString().replace(',', '.');
        var total = parseFloat(subTot) - parseFloat(disc) + parseFloat(ship);
        $('#priceTotal').html(total);

        var idCourier = $('input[name=courier]:checked').val();
        var stringCourier = $('#label-courier-' + idCourier).html();
        $('#courierReview').html(stringCourier);
    });

    var subTot = $('#priceSubtotal').text().toString().replace(',', '.');
    var disc = $('#priceDiscount').text().toString().replace(',', '.');
    var ship = priceShipping.toString().replace(',', '.');
    var total = parseFloat(subTot) - parseFloat(disc) + parseFloat(ship);
    $('#priceTotal').html(total);

});

function buttonContinue(oldStep, newStep) {
    activeStep(newStep);
    disableStep(oldStep);
}

function activeStep(namestep) {
    $('#checkout-step-' + namestep).show();
    $('#opc-' + namestep).addClass('allow active');
}

function disableStep(namestep) {
    $('#checkout-step-' + namestep).hide();
    $('#opc-' + namestep).removeClass('allow active');
}

