<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion réussie!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/c0eabd5a0e.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        require 'head2.php';
        $cookie_name = "user";
        $cookie_value = "admin";
        $cookie_basic_value = "basic";
        $cookie_option = "/";
        if(!isset($_REQUEST["login"])){
            die("<span style='color:red;'>Erreur: Aucun formulaire soumis</span>"); 
        }
        $tabUser = file_get_contents('../JSON/utili.json');
        $tabAdmin = file_get_contents('../JSON/admin.json');
        $json_users = json_decode($tabUser,true);
        $json_admin = json_decode($tabAdmin,true);
        $login = $_POST["NomUser"];
        $pass = $_POST["PassUser"];
        if($json_admin['username'] == $login && $json_admin['motdepasse'] == $pass){
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), $cookie_option);
            echo "<div class='text-center'>";
            echo "<h1 class='mt-4 mb-5'>Vous êtes connecté en tant qu'administrateur!</h1>";
            echo "<p class='mt-4 mb-5'>Vous pouvez maintenant naviger le site et faire vos achat!</p>";
            echo "<p class='mt-4 mb-5'>Vous pouvez aussi consulter les demandes d'emplois et la liste des utilisateurs.</p>";
            echo "<p class='mt-4 mb-5'>Mais n'hésitez pas à dépenser aussi!</p>";
            echo "</div>";
        }else{
            setcookie($cookie_name, $cookie_basic_value, time() + (86400 * 30), $cookie_option);
            echo "<div class='text-center'>";
            echo "<h1 class='mt-4 mb-5'>Vous êtes connecté!</h1>";
            echo "<p class='mt-4 mb-5'>Vous pouvez maintenant naviger le site et faire vos achat tel que vous l'avez toujours voulu!</p>";
            echo "<p class='mt-4 mb-5'>N'oubliez pas, la livraison est gratuite pour toute commande de 25 000$ ou plus!!! Quelle aubaine!</p>";
            echo "<p class='mt-4 mb-5'>N'hésitez pas à dépenser!</p>";
            echo "</div>";
        }
        require 'tail2.php';
    ?>


</body>

</html>