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

//close modal
function closeModal(idModale) {
    document.getElementById(idModale).style.display = 'none';
}

function modaleSottocategoria(idModale, categoria) {
    document.getElementsByClassName('inputModale').value = '';
    if (document.getElementById('modaleCategorySub') != null)
        document.getElementById('modaleCategorySub').value = categoria.toString();
    if (document.getElementById('categoriaLabel') != null)
        document.getElementById('categoriaLabel').innerText = "  in: " + categoria.toString().toUpperCase();

    document.getElementById(idModale).style.display = 'block';
}

//conferma operazioni critiche
function conferma(message, id) {
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
        td_temp = tr[i].getElementsByTagName("td");
        //RICERCA NEL 1,2,3 e 4 CAMPO
        for (j = 1; j <= 4; j++) {
            td = td_temp[j];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

    }
}

//Se il paramentro "openAlert" è pieno, apri un alert
function openAlert() {
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('openAlert').toString();
    if (myParam != null) {
        window.alert(myParam);
        window.location.href = document.documentURI.split('?')[0];
    }
    else return null;
}

openAlert()


function openModalAdmin(id, el, show, order, courier, other) {
    if (el != null) {
        document.getElementById('brandModal').value = el['brand'];
        document.getElementById('nameModal').value = el['name'];
        document.getElementById('descriptionModal').value = el['description'];
        document.getElementById('subcategoryModal').value = el['subcategories'];
        document.getElementById('priceModal').value = el['price'];
        document.getElementById('quantityModal').value = el['availability'];
        document.getElementById('weightModal').value = el['weight'];
        document.getElementById('product_codeModal').value = el['product_code'];
        document.getElementById('element_idModal').value = el['id'];
        document.getElementById('element_idModal1').value = el['id'];
    } else if(show != null) {
        document.getElementById('element_idModal').value = show['id'];
        document.getElementById('element_idModal1').value = show['id'];
        document.getElementById('nomeMod').value = show['name'];
        document.getElementById('descrMod').value = show['description'];
        document.getElementById('catMod').value = show['nameSubCategory'];
        document.getElementById('linkMod').value = show['linkBuy'];
    } else if(courier != null) {
        document.getElementById('courier_idModal').value = courier['id'];
        document.getElementById('courier_idModal1').value = courier['id'];
        document.getElementById('brandModal').value = courier['courier_name'];
        document.getElementById('name_serviceModal').value = courier['name_service'];
        document.getElementById('priceModal').value = courier['price'];
        document.getElementById('pesominModal').value = courier['pesomin'];
        document.getElementById('pesomaxModal').value = courier['pesomax'];
        document.getElementById('stima_giorniModal').value = courier['stima_giorni'];
    } else {

    }
    document.getElementById('save').style.visibility = "hidden";
    document.getElementById("fieldsetModale").disabled = true;
    document.getElementById(id).style.display = 'block';
}

function enableField() {
    document.getElementById("fieldsetModale").disabled = false;
    document.getElementById('save').style.visibility = "";
}

function openModalList(idmodale) {
    /*
    var ul = document.getElementById("listProd");
    list.forEach(element => {
        var li = document.createElement("li");
        li.appendChild(document.createTextNode(element['name'] + ".\b pezzi disponibili: "+ element['availability']));
        ul.appendChild(li);
    }); */
    document.getElementById(idmodale).style.display = 'block';
}
