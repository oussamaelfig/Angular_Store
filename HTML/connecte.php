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
    <!--Font awesome-->
   <script src="https://kit.fontawesome.com/c0eabd5a0e.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        require 'head2.php';
    
        if(!isset($_REQUEST["login"])){
            die("<span style='color:red;'>Erreur: Aucun formulaire soumis</span>"); 
        }
        $file = file_get_contents("../JSON/users.json");
        $json_user = json_decode($file);
        $login = $_POST["NomUser"];
        $pass = $_POST["PassUser"];
        
        for($i = 0; $i < count($json_user[0]); ++$i){
            
        }
        require 'tail2.php';
    ?>
    

</body>

</html>
