<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merci!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/c0eabd5a0e.js" crossorigin="anonymous"></script>


<body>
    <?php
        
        //Check if forms as been submitted
        if(!isset($_REQUEST["soumettre"])){
            die("<span style='color:red;'>Erreur: Aucun formulaire soumis</span>"); 
        }
        $tab = file_get_contents('../JSON/embauche.json');
        if($tab == '{"demandes":[]}'){
            //removes last two chars (']}')
            $tab = substr($tab, 0, -2); 
            $string = $tab.json_encode($_POST+$_FILES);
            file_put_contents('../JSON/embauche.json', $string."]}", LOCK_EX);
        }else{
            //removes last two chars (']}')
            $tab = substr($tab, 0, -2); 
            $string = $tab.",".json_encode($_POST+$_FILES);
            file_put_contents('../JSON/embauche.json', $string."]}", LOCK_EX);
        }
        
        if(isset($_FILES["Photo"])){
            $infoFich = $_FILES["Photo"];
            $fileName = $infoFich['name']; 
            $tmpFile=$infoFich['tmp_name'];
            $saveDir="../Images/";
            $savedFile="$saveDir"."/$fileName";
        }

        if(isset($_FILES["CV"])){
            $infoFich = $_FILES["CV"];
            $fileName2 = $infoFich['name'];
            $tmpFile2=$infoFich['tmp_name'];
            $savedFile2="$saveDir"."/$fileName2";
        }

        require 'head2.php';
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $date = $_POST['datepick'];
        $courriel = $_POST['Courriel'];
        $adresse = $_POST['Adresse'];
        $codePost = $_POST['Postal'];
        $poste = $_POST['ListePoste'];
        
        move_uploaded_file("$tmpFile","$savedFile")||die("<span style='color:red'>impossible de saugarder $fileName  dans $saveDir</span>");
        move_uploaded_file("$tmpFile2","$savedFile2")||die("<span style='color:red'>impossible de saugarder $fileName2  dans $saveDir</span>");

    ?>
    <div class="container text-center">
        <h1>Merci! Voici les infos reçues:</h1>
        <div class="row">
            <div class="col-md-3"></div> <!--Empty-->
            <div class="col-12 col-md-3">
                <p>Nom: <?php echo $nom; ?> <br></p>
                <p>Prénom: <?php echo $prenom; ?> <br></p>
                <p>Date de naissance: <?php echo $date; ?></p>
                <p>Courriel: <?php echo $courriel; ?><br></p>
            </div>
            <div class="col-12 col-md-3">
                <p>Adresse: <?php echo $adresse; ?><br></p>
                <p>Code postal: <?php echo $codePost; ?></p>
                <p>Poste choisi: <?php echo $poste; ?></p>
            </div>
            <div class="col-md-3"></div> <!--Empty-->
            <div class="col-12 mb-3">
                <div class="mb-3">
                    <?php echo "<img src='".$savedFile."' class='img img-circle center-block'  style='width:200px;' alt='image téléversée'>";?>
                    <br>
                </div>
                <div class="mb-5">
                    <a href="<?php echo $savedFile2; ?>">Vous pouvez visionner votre CV en cliquant ici </a>
                </div>
            </div>
        </div>
    </div>
    <?php
        require 'tail2.php';
    ?>