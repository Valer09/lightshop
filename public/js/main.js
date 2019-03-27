// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) { myIndex = 1 }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 5000);
    console.log("Carosello")
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction(id) {
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

//show images
function openImage(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}

function openTab(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-green", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-green";
  }


  //conferma operazioni critiche
  function conferma(message,id) {
    if (confirm(message)) {
        document.getElementById(id).submit();
    } else {
        return false;
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
 
