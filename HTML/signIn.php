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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--Font awesome-->
   <script src="https://kit.fontawesome.com/c0eabd5a0e.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
    <?php
        require 'head2.php';
        if(isset($_COOKIE["user"])) : 
    ?>
    <div class="text-center container-fluid p-5 bg-light">
        <?php 
            unset($_COOKIE["user"]);
            setcookie("user", null, time() - 3600, "/");
        ?>
        <h1>Vous êtes déconnecté(e)</h1>
        <p class="muted">Vous pouvez fermez le navigateur sécuritairement désormais <br>
        Il n'y a possiblement plus aucun danger de vous faire voler votre identité. <br>
        <small>Possiblement. Nous ne sommes pas responsable si un de nos employés vole votre identité.</small><br>
        Merci d'avoir visité notre site et bonne journée.</p>
    </div>
    <?php else:?>
    <div class="text-center container-fluid p-5 bg-light">
        <h1>Connectez-vous</h1>
        <p class="muted"><small>Le monde de la techo s'ouvre à vous</small></p>
        <form name="SignIn" id="SignIn" onsubmit="return validerLogin()" action='connecte.php' method="post">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mt-4">
                    <label for="NomUser" class="form-label">Nom d'utilisateur:</label>
                    <input type="text" name="NomUser" id="NomUser" class="form-control" placeholder="Identifiant">
                </div>
                <div class="col-12 col-md-6 mb-4 mt-4">
                    <label for="PassUser" class="form-label">Mot de passe:</label>
                    <input type="password" name="PassUser" id="PassUser" class="form-control"
                        placeholder="Mot de passe">
                </div>
                <div class="col-12">
                    <div class="mb-4 mt-4">
                        <input type="submit" name="login" value="Se connecter" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php endif; ?>
    <?php
        require 'tail2.php';
    ?>
    

</body>

</html>