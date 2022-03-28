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


<body>
    <?php
        require 'head2.php';
    ?>
    <div class="container-fluid text-center">
        <table class="table table-striped caption-top table-hover">
            <caption style="text-align:center">Utilisateurs</caption>
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Mot de passe</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $tabUser = file_get_contents('../JSON/utili.json');
                    //$tabAdmin = file_get_contents('../JSON/admin.json');
                    $json_users = json_decode($tabUser,true);
                    //$json_admin = json_decode($tabAdmin,true);
                    for($i = 0; $i < 10; ++$i){
                        $user = $json_users[$i]["username"];
                        $pass = $json_users[$i]["motdepasse"];
                        echo "<tr>";
                        echo "<th>$user</th>";
                        echo "<th>$pass</th>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
        </table>
        <table class="table table-striped caption-top table-hover bg-danger">
            <caption style="text-align:center">Administrateur/Gérant</caption>
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Mot de passe</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $tabAdmin = file_get_contents('../JSON/admin.json');
                    $json_admin = json_decode($tabAdmin,true);
                    $user = $json_admin["username"];
                    $pass = $json_admin["motdepasse"];
                    echo "<tr>";
                    echo "<th>$user</th>";
                    echo "<th>$pass</th>";
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
    <?php
        require 'tail2.php';
    ?>
    
</body>

</html>