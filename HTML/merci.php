<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/c0eabd5a0e.js" crossorigin="anonymous"></script>


<body>
    <?php
        require 'head2.php';
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prénom'];
        $date = $_POST['datepick'];
        $courriel = $_POST['Courriel'];
        $adresse = $_POST['Adresse'];
        $codePost = $_POST['Postal'];
        $poste = $_POST['ListePoste'];
        $cv = $_FILES["CV"];
        $photo = $_FILES["Photo"];
    ?>
    <div class="container text-center">
        <h1>Merci! Voici les infos reçues:</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <p>Nom: <?php echo $nom; ?> <br></p>
                <p>Prénom: <?php echo $prenom; ?> <br></p>
                <p>Date de naissance: <?php echo $date; ?></p>
                <p>Courriel: <?php echo $courriel; ?><br></p>
            </div>
            <div class="col-12 col-md-6">
                <p>Adresse: <?php echo $adresse; ?><br></p>
                <p>Code postal: <?php echo $codePost; ?></p>
                <p>Poste choisi: <?php echo $poste; ?></p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-6">
                    <div class="mb-5">
                        <img src="<?php echo $photo; //Ne marhe pas comme prévu?>" alt="Votre photo">
                        <br>
                        <a href="<?php echo $cv; ?>">Vous pouvez visionner votre CV en cliquant ici</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require 'tail2.php';
    ?>