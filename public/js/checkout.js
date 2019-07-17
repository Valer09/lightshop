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
        }
    });

    /**Payment Information */
    $('#co-payment-form input').on('change', function () {
        if ($('#p_method_ccsave:checked').val() == 'ccsave') {
            $('#payment_form_ccsave').show();
        } else {
            $('#payment_form_ccsave').hide();
        }
    });

    /**open step with query */
    var urlParams = new URLSearchParams(location.search);
    console.log(urlParams.get('step').toString());
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

