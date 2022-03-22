var jsonEmploi = "";

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
    const lettreChiffres = /^[0-9\sa-zA-Z\sa-zA-Z]+$/;
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

    jsonEmploi = jsonEmploi + JSON.stringify($("#Form").serializeArray());

    return true;
}

function validerLogin(){
    var id = document.forms["SignIn"]["NomUser"];
    var pass = document.forms["SignIn"]["PassUser"];

    if(id.value == "" || id.value.length != 8 || !/^[a-zA-Z]+$/.test(id.value)){
        alert("Entrez un identifiant valide.")
        id.focus();
        return false;
    }

    if(pass.value == "" || pass.value.length != 8 || !/^[a-zA-Z0-9]+$/.test(pass.value)){
        alert("Entrez un mots de passe valide.")
        pass.focus();
        return false;
    }
    if(!verifierLoginTemp(id, pass)){
        alert("Identifiant et/ou mot de passe invalide!")
        return false;
    }
    
    return true;
}

//Fonction temp qui ne fait pas la diff entre users normaux et admin
function verifierLoginTemp(id, pass){
    var file = '{ '+
        '"users":['+
            '{"username":"allosalu","motdepasse":"1234asdf"},'+
            '{"username":"userDeux","motdepasse":"p1s2d3f4"},'+
            '{"username":"infowebs","motdepasse":"INF31902"},'+
            '{"username":"infoJava","motdepasse":"2050inf2"},'+
            '{"username":"jaimectf","motdepasse":"2171best"},'+
            '{"username":"cpluscpl","motdepasse":"cPlus232"},'+
            '{"username":"hellowor","motdepasse":"tech2022"},'+
            '{"username":"bonjourM","motdepasse":"yeetMe44"},'+
            '{"username":"confiden","motdepasse":"pass1234"},'+
            '{"username":"qwertyui","motdepasse":"QwErTy12"}'+
        '],'+
    
        '"admin":[{"username":"administ", "motdepasse":"TpAdmi12"}]'+
    '}';
    var json = JSON.parse(file);
    var usersArray = json.users;
    var gerantArray = json.admin;
    var cpt = 0;
    var estEgaux = false;
    while(cpt < usersArray.length && !estEgaux){
        if(usersArray[cpt].username === id.value && usersArray[cpt].motdepasse === pass.value){
            estEgaux = true;
        }
        ++cpt;
    }
    while(cpt < gerantArray.length && !estEgaux){
        if(gerantArray[cpt].username === id.value && gerantArray[cpt].motdepasse === pass.value){
            estEgaux = true;
        }
        ++cpt;
    }
    if(estEgaux){
        return true;
    }

    return false;
}