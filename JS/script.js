function validerForm(){
    var pnom = document.forms["Post"]["Prénom"];
    var nom = document.forms["Post"]["Nom"];
    var dateN = document.forms["Post"]["datepick"];
    var poste = document.forms["Post"]["ListePoste"];
    var courriel = document.forms["Post"]["Courriel"];
    var adresse = document.forms["Post"]["Adresse"];
    var postal = document.forms["Post"]["Postal"]
    //var cv = document.forms["Post"]["CV"];
    //var Photo = document.forms["Post"]["Photo"];
    const dateMin = new Date("01/01/2010");
    var dateE = new Date(dateN.value);
    const lettreChiffres = /^[0-9a-zA-Z\s]+$/;
    const codePostVal = /^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][ -]?\d[ABCEGHJ-NPRSTV-Z]\d$/i;

    console.log(isNaN(parseInt(pnom.value)));

    if(pnom.value == "" || /\d/.test(pnom.value)){
        alert("Entrez un prénom valide!");
        pnom.focus();
        return false;
    }

    if(nom.value == "" || /\d/.test(nom.value)){
        alert("Entrez un nom valide!")
        nom.focus();
        return false;
    }

    if(dateE.getTime >= dateMin.getTime()){
        alert("Malheureusement, vous êtes trop jeune");
        dateN.focus();
        return false;
    }

    if(poste.selectedIndex < 1){
        alert("Veuillez selectionner un poste.");
        poste.focus();
        return false;
    }

    if(courriel.value.indexOf("@",0) < 0 || courriel.value.indexOf(".",0) < 0){
        alert("Entrez une adresse courriel valide.");
        courriel.focus();
        return false;
    }

    if(!adresse.value.match(lettreChiffres)){
        alert("Entrez une adresse valide.");
        adresse.focus();
        return false;
    }

    if(!postal.value.match(codePostVal)){
        alert("Entrez un code postal valide.");
        postal.focus();
        return false;
    }


    return true;
}