// Used to toggle the menu on small screens when clicking on the menu button
function soffietto(id, idButton) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }

    var x = document.getElementById(idButton);
    if (x.className.indexOf("w3-green") == -1) {
        x.className += " w3-green";
    } else {
        x.className = x.className.replace("w3-green", "");
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

//close modal
function closeModal(idModale){
    document.getElementById(idModale).style.display='none';
}

function modaleSottocategoria(idModale, categoria) {
    document.getElementsByClassName('inputModale').value = '';
    document.getElementById('modaleCategorySub').value = categoria.toString();
    document.getElementById(idModale).style.display='block';
    document.getElementById('categoriaLabel').innerText = "  in: "+ categoria;

}

  //conferma operazioni critiche
  function conferma(message,id) {
    if (confirm(message)) {
        document.getElementById(id).submit();
    } else {
        return false;
    }
 }


 /*FUNZIONE RICERCA da modificare!!!!!!*/    
 function finderElement() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

 //Se il paramentro "openAlert" è pieno, apri un alert
 function openAlert() {
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('openAlert').toString();
    if (myParam!=null){
        window.alert(myParam);
    }
    else return null;
 }

 openAlert()