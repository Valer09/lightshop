$(document).ready(function () {
    /**CHECKOUT METHOD */
    if ($('#billing-address-select').val() == '') {
        $('#billing-new-address-form').show();
    } else {
        $('#billing-new-address-form').hide();
    }
    $('#billing-address-select').on('change', function () {
        if (this.value == '') {
            $('#billing-new-address-form').show();
        } else {
            $('#billing-new-address-form').hide();
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

    urlParams.has('type');  // true
    urlParams.get('id');    // 1234
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

