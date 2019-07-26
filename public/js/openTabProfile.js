function openTab(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("multiple_addresses");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" btn-continue", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " btn-continue";
}


//conferma operazioni critiche
function conferma(message, id) {
    if (confirm(message)) {
        document.getElementById(id).submit();
    } else {
        return false;
    }
}
