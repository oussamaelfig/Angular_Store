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
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
    <?php
        require 'head2.php';
        if(isset($_REQUEST["login"])) : 
    ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php 
                        $tabUser = file_get_contents('../JSON/utili.json');
                        $tabAdmin = file_get_contents('../JSON/admin.json');
                        $json_users = json_decode($tabUser);
                        $json_admin = json_decode($tabAdmin);
                        $user = $_POST['NomUser'];
                        $pass = $_POST['PassUser'];
                        for($i = 0; $i<count($json_users); ++$i){
                            if($json_users[i]['username'] == $user &&
                            $json_users[i]['motdepasse'] == $pass){
                                define('USER', 'base');
                                echo "<h1>Vous êtes connecté!</h1>";
                                echo "<p>Vous pouvex maintenant naviger le site et faire vos achat tel que vous l'avez toujours voulu!</p>";
                                echo "<p>N'oubliez pas, la livraison est gratuite pour toute commande de 25 000$ ou plus!!! Quel aubaine!</p>";
                            }else if($json_admin[i]['username'] == $user &&
                            $json_admin[i]['motdepasse'] == $pass){
                                define('USER', 'admin');
                                echo "<h1>Vous êtes connecté en tant qu'administrateur!</h1>";
                                echo "<p>Vous pouvex maintenant naviger le site et faire vos achat!</p>";
                                echo "<p>Vous pouvez aussi consulter les demandes d'emplois et la liste des utilisateurs.</p>";
                                echo "<p>Mais n'hésitez pas à dépenser aussi!</p>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        
    <?php else:?>
    <div class="text-center container-fluid p-5 bg-light">
        <h1>Connectez-vous</h1>
        <p class="muted"><small>Le monde de la techo s'ouvre à vous</small></p>
        <form name="SignIn" id="SignIn" onsubmit="return validerLogin()" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
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