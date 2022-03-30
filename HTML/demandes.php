<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les demandes d'emploi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/c0eabd5a0e.js" crossorigin="anonymous"></script>



<body>
    <?php
        require 'head2.php';
    ?>
    <div class="container-fluid text-center">
        <table id="datatable-emplois" class="table table-striped table-bordered table-hover caption-top">
            <caption style="text-align:center">Demandes d'emploi</caption>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naisssance</th>
                    <th>Poste désiré</th>
                    <th>Courriel</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>CV</th>
                    <th>Photo</th>
                    <th>Commentaires</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <?php
        require 'tail2.php';
    ?>

</body>

</html>