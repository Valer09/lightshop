$(document).ready(function () {
    //CHECK COURIER
    $(".radioCourier").change(function () {
        var costoSped = parseFloat(this.classList[2]);
        var subTotale = parseFloat($('#subtotale').text());
        console.log(subTotale);
        $("#costoSped").text(costoSped.toFixed(2));
        $("#totaleCheckout").text((costoSped + subTotale).toFixed(2));
    });
});