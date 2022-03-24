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
        if ($_SERVER['REQUEST_METHOD'] != 'POST'): ?>
    <div class="text-center container-fluid p-5 bg-light">
        <h1>Devenez membre de notre formidable équipe!</h1>
        <p class="muted"><small>Salaire à partir de 0,25$/jour</small></pid>
        <form name="Post" id="Form" action="#" onsubmit="return validerForm()" method="post">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-4 mt-4">
                        <label for="Nom" class="form-label">Nom*:</label>
                        <input type="text" name="Nom" id="Nom" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-4 mt-4">
                        <label for="Prénom" class="form-label">Prénom*:</label>
                        <input type="text" name="Prénom" id="Prénom" class="form-control" placeholder="Prénom">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-4 mt-4">
                        <label for="dateid" class="form-label">Date de naissance*:</label>
                        <div class="input-group">
                            <i class="bi bi-calendar-date input-group-text"></i>
                            <input type="text" id='dateid' class="datepicker_input form-control" name='datepick'
                                placeholder="Date de naissance" required aria-label="Naissance">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-4 mt-4">
                        <label for="ListePoste" class="form-label">Poste désiré*:</label>
                        <select name="ListePoste" class="form-select" id="ListePoste">
                            <option>Faire mon choix</option>
                            <option>Gérant</option>
                            <option>Développeur Web</option>
                            <option>Développeur</option>
                            <option>Responsable Marketing</optio>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-4 mt-4">
                        <label for="Courriel" class="form-label">Courriel*:</label>
                        <input type="email" name="Courriel" id="Courriel" class="form-control"
                            placeholder="votreCourriel@exemple.ca">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-4 mt-4">
                        <label for="Adresse" class="form-label">Adresse*:</label>
                        <input type="text" name="Adresse" id="Adresse" class="form-control"
                            placeholder="123 rue Exemple">
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="mb-4 mt-4">
                        <label for="Postal" class="form-label">Code postal*:</label>
                        <input type="text" name="Postal" id="Postal" class="form-control" placeholder="A1A 2A2">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="mb-4 mt-4">
                        <label for="CV" class="form-label">Télécharger votre CV (PDF)*:</label>
                        <input type="file" name="CV" id="CV" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="mb-4 mt-4">
                        <label for="Photo" class="form-label">Photo (JPEG,PNG,HEIF,...)*:</label>
                        <input type="file" name="Photo" id="Photo" class="form-control" required>
                    </div>
                </div>
                <div class="col-12">
                    <label for="Commentaires" class="form-label">Commentaires:</label>
                    <textarea name="Commentaires" id="Commentaires" cols="30" rows="10" class="form-control"
                        placeholder="Informations supplémentaires (optionnel)"></textarea>
                </div>
                <div class="col-12">
                    <div class="mb-4 mt-4">
                        <input type="submit" value="Envoyer" class="btn btn-success">
                        <input type="reset" value="Effacer" class="btn btn-danger">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php else :
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
    <?php endif;?>
    <?php
        require 'tail2.php';
    ?>
</body>

</html>