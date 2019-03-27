// Used to toggle the menu on small screens when clicking on the menu button
function soffietto(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// open modale
function openModal(idModale, idProdotto, nome, descr, category) {
    document.getElementById('idMod').value = idProdotto.toString();
    document.getElementById('nomeMod').value = nome.toString();
    document.getElementById('descrMod').value = descr.toString();
    document.getElementById('catMod').value = category.toString();
    document.getElementById(idModale).style.display='block';
}