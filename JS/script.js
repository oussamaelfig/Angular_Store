//Variable qui represente les fichiers .json
var json_file;
$.getJSON("../JSON/users.json", function(tab){json_file = tab;});
var json_emplo;
$.getJSON("../JSON/embauche.json", function(tab){json_emplo = tab;});

//Pour formatter le datatable des utilisateurs
$(document).ready( function () {
    $('#datatable').DataTable({
        "data": json_file.users,
        "columns":[
            {"data":"username"},
            {"data":"motdepasse"}
        ]
    });
});

//Pour formatter le datatable des postulants
$(document).ready( function () {
    $('#datatable-emplois').DataTable({
        "data": json_emplo.demandes,
        "columns":[
            {"data":"Nom"},
            {"data":"Prenom"},
            {"data":"datepick"},
            {"data":"ListePoste"},
            {"data":"Courriel"},
            {"data":"Adresse"},
            {"data":"Postal"},
            {"data":"CV.full_path"},
            {"data":"Photo.full_path"},
            {"data":"Commentaires"}
        ]
    });
});

//Validation duformulaire pour postuler et vérifier si les conditions sont remplies
function validerForm(){
    var pnom = document.forms["Post"]["Prenom"];
    var nom = document.forms["Post"]["Nom"];
    var dateN = document.forms["Post"]["datepick"];
    var poste = document.forms["Post"]["ListePoste"];
    var courriel = document.forms["Post"]["Courriel"];
    var adresse = document.forms["Post"]["Adresse"];
    var postal = document.forms["Post"]["Postal"]
    const dateMin = new Date("01/01/2010");
    var dateE = new Date(dateN.value);
    const lettreChiffres = /^[0-9]+\s[a-zA-Z\s]+$/;
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

    if(dateE.getTime() >= dateMin.getTime()){
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

//Validation de l'id et du mot de passe entres par l'utilisateur
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

    var usersArray = json_file.users;
    var gerantArray = json_file.admin;
    for (var i = 0; i < usersArray.length; ++i) {
        if(id.value === usersArray[i].username && pass.value === usersArray[i].motdepasse){
            return true;
        }
    }
    for(var j = 0; j < gerantArray.length; ++j){
        if(id.value === gerantArray[j].username && pass.value === gerantArray[j].motdepasse){
            return true;
        }
    }
    alert("Identifiant et/ou mot de passe invalide.");
    return false;
}