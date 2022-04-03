<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/c0eabd5a0e.js" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Panier</title>
</head>

<body>

    <?php
  require "head2.php";
  
?>



    <!--Cart items details-->
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col" style="overflow:scroll; height:500px; overflow-x: hidden;">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="h5">Panier</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Prix</th>
                                </tr>
                            </thead>
                            <tbody class="product-add">
                                <!--ici ou on ajout les elements-->

                            </tbody>
                        </table>
                        <?php
          if(!isset($_COOKIE["user"])){
            echo '<button type="button" class="btn btn-primary btn-lg btn-block btn-buy disabled">Acheter (Vous devez être connecté(e))</button>';
            echo '<button type="button" class="btn btn-secondary btn-lg btn-block btn-buy disabled">Vider le panier</button>';
          }else{
            echo '<a href="explorer.php"><button type="button" class="btn btn-primary btn-lg btn-block btn-buy">Acheter (Vous devez être connecté(e))</button></a>';
            echo '<button type="button" class="btn btn-secondary btn-lg btn-block btn-buy">Vider le panier</button>';
          }
          ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
  require "tail2.php";
?>
</body>

</html>