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
  <link rel="stylesheet" href="CSS/style.css" />
  <title>COMPECOM</title>
</head>

<body>
<?php
  require 'HTML/head.php';
?>
  <!--   Hero-->
  <div class="hero vh-100 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto text-center">
          <h1 class="display-4 text-white">
            Trouvez les meilleures offres de nos derniers soldes au même endroit.
          </h1>
          <p class="text-white my-3">
            Apprenez-en plus sur nos produits de electronique et de nouvelle technologies, nos produits LastPass et nos offres groupées.
          </p>
          <a href="HTML/explorer.php" class="btn btn-outline-light">Explorer</a>
        </div>
      </div>
    </div>
  </div>

 
        <section class="shop container">
          <h3 class="header-red">Nouveautés</h3>
          <h2 class="section-title">Produits Populaires</h2>
        <div class="shop-content">
        <!--product 1-->
        <div class="product-box">
          <img src="Images/apple-watch.jpg" alt="apple watch" class="product-img">
          <h2 class="product-title">Apple Watch SE</h2>
          <span class="price">369.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 2-->
        <div class="product-box">
          <img src="Images/iphone-13-pro-green-select.png" alt="iphone 13" class="product-img">
          <h2 class="product-title">iPhone 13 Vert 256Go </h2>
          <span class="price">1599.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 3-->
        <div class="product-box">
          <img src="Images/airpods-product.jpg" alt="AirPods" class="product-img">
          <h2 class="product-title">AirPods Pro</h2>
          <span class="price">329.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 4-->
        <div class="product-box">
          <img src="Images/macbook-product.jpg" alt="MacBook" class="product-img">
          <h2 class="product-title">MacBook Pro 14 po </h2>
          <span class="price">2499,00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        </div>
        </section>
      </div>
    </div>
  </section>

  <!-- banner section -->
  <section id="learn" class="p-5 bg-dark">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md p-5">
          <h2 style="color: white;">Bientôt dans nos magasin</h2>
          <p class="lead">
Faites partie des premiers à obtenir la toute dernière techno ainsi que des produits vendus en exclusivité chez Best Buy.
          </p>
          <p>Économisez jusqu’à 300 $ sur une sélection de téléviseurs 4K et 8K Ultra HD.
          </p>
          <a href="#" class="btn btn-light mt-3">
            <i class="bi bi-chevron-right"></i> Lire plus
          </a>
        </div>
        <div class="col-md">
          <img class="img-fluid" src="Images/tv_samsung.png" alt="TV-IMAGE">
        </div>
      </div>
    </div>
  </section>

  <!-- Question accordion-->
  <section id="questions" class="p-5">
    <div class="container">
      <h2 class="text-center mb-4">Questions fréquentes</h2>
      <div class="accordion accordion-flush" id="questions">
        <!--Item 1-->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#question-one">
              Comment passer une commande ?
            </button>
          </h2>
          <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Passer une commande sur COMPECOM est un jeu d’enfant. Ajoutez simplement les articles à votre panier, passez à la caisse, ajoutez les informations relatives à l’expédition et à la méthode de paiement, et passez votre commande. Nous expédions les commandes en ligne partout au Canada et États Unis, et les frais d’expéditions pour la plupart des commandes excédant 35 $ sont gratuits!</div>
          </div>
        </div>
        <!--Item 2-->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#question-two">
Retourner ou échanger un produit Best Buy
            </button>
          </h2>
          <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Si vous avez acheté votre article en magasin, en ligne ou avec l’option Réservez et ramassez, vous pouvez le retourner ou l’échanger dans n’importe quel magasin COMPECOM actuellement ouvert.
            </div>
          </div>
        </div>
        <!--Item 3-->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#question-three">
              Quel est le délai d’expédition?
            </button>
          </h2>
          <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Notre objectif est de vous faire parvenir vos articles rapidement. Nous faisons appel à différentes compagnies de transport, en fonction de la taille de votre objet, du lieu de livraison et du vendeur.</div>
          </div>
        </div>
        <!-- Item 4-->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#question-four">
Si mon colis est perdu, qui dois-je contacter?
            </button>
          </h2>
          <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Vous pouvez communiquer avec notre équipe du Service à la clientèle (appelez le 1-866-237-8289) et si vous êtes admissible, nous entreprendrons pour vous le suivi de votre commande avec le fournisseur de services d’expédition applicable.
<h4> Remarque :</h4>
Les réclamations doivent être faites au plus tard 90 jours après l’expédition de votre commande.
Postes Canada n’ouvrira pas de réclamation en votre nom, la réclamation doit provenir de l’équipe de l’expérience client de COMPECOM.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>

<?php
  require 'HTML/tail.php';
?>
</body>

</html>