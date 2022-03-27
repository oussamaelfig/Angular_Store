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
  <title>Explorer</title>
</head>

<?php
  require "head2.php";
?>

  <!--list of products -->
  <!--Smartphones-->
  <section class="shop container">
      <h3 class="header-red">Explorer nos produits</h3>
      <h1 class="section-title">Téléphones Intelligents</h1>
      <br>
      <div class="shop-content">
        <!--product 1-->
        <div class="product-box">
<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
          <img
            src="../Images/iphone-13-pro-green-select.png"
            alt="apple watch"
            class="product-img"
          />
</a>
<!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!--On ajout le contenu du modal window-->
      <div class="container">
    <div class="row">
        <div class="col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../Images/imac-po.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Images/imac-po1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Images/imac-po2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Images/imac-po3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="col-md-7">
<div class="col-md-7">
    <p class="no-produits text-center">Nos produits</p>
    <h2>Imac Po 2022</h2>
    <p>Code du produit: ABCDEFG</p>
    <p class="price">USD $15.00</p>
    <p><b>Date de sortie:</b>12/03/2021</p>
    <p><b>Marque</b>Apple</p>
    <p><b>Description:</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis adipisci odit velit eum explicabo qui vel totam laborum. Distinctio excepturi sed nemo earum at, voluptatum, delectus recusandae soluta assumenda corrupti numquam voluptates. Animi facilis velit blanditiis porro error sint, fugit ipsam laborum itaque voluptas incidunt reiciendis,</p>
<button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
</div>
        </div>
    </div>
</div>
<br>
    </div>
  </div>
</div>
          <h2 class="product-title">Apple iPhone 13 256Go</h2>
          <span class="price">1599.00 $</span>
          <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <!--Product 2-->
        <div class="product-box">
          <a href="#">

          <img
            src="../Images/iphone12.jpg"
            alt="iphone 13"
            class="product-img"
          />
          </a>
          <h2 class="product-title">Apple iPhone 12 128Go</h2>
          <span class="price">899.45 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 3-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/SamsungGalaxyNote10+.webp"
            alt="AirPods"
            class="product-img"
          />
          </a>
          <h2 class="product-title">Galaxy Note10, Note10+ 5G 246Go</h2>
          <span class="price">799.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 4-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/GooglePixel6Pro.png"
            alt="MacBook"
            class="product-img"
          />
          </a>
          <h2 class="product-title">Google Pixel 6 128Go</h2>
          <span class="price">599.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
      </div>
    </section>
<hr style="width:50% ; margin: auto;"> 
 <!--Laptops-->
<section class="shop container">
  <br>
  <br>
        <h1 class="section-title">Ordinateurs et Mac</h1>
        <br>
      <div class="shop-content">
        <!--product 5-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/macbook-product.jpg"
            alt="apple watch"
            class="product-img"
          />
          </a>
          <h2 class="product-title">MacBook Pro 14 po</h2>
          <span class="price">2499.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 6-->
        <div class="product-box">
          <a href="productDesc.php">
          <img src="../Images/imac-po.jpg" alt="iphone 13" class="product-img" />
        </a>
          <h2 class="product-title">iMac 24 po</h2>
          <span class="price">1849.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 7-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/PcGamer-Ryzen.jpg"
            alt="AirPods"
            class="product-img"
          />
          </a>
          <h2 class="product-title">
            Skytech Archangel Gaming Computer PC Desktop – Ryzen
          </h2>
          <span class="price">1049.99 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 8-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/Zenbook-Pro.webp"
            alt="MacBook"
            class="product-img"
          />
          </a>
          <h2 class="product-title">
            Zenbook Pro Duo 15 OLED (UX582, 11th Gen Intel)
          </h2>
          <span class="price">4199.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
      </div>
    </section>
<hr style="width:50% ; margin: auto;"> 
  <!--Accessoires-->
  <section class="shop container">
    <br>
    <br>
          <h1 class="section-title">Accessoires</h1>
          <br>
      <div class="shop-content">
        <!--product 9-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/airpods-product.jpg"
            alt="Image de AirPods Pro d'Apple"
            class="product-img"
          />
          </a>
          <h2 class="product-title">AirPods Pro</h2>
          <span class="price">329.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 10-->
        <div class="product-box">
          <a href="#">
          <img src="../Images/apple-watch.jpg" alt="Image d'Apple Watch d'Apple" class="product-img" />
          </a>
          <h2 class="product-title">Apple Watch SE</h2>
          <span class="price">369.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 11-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/souris-apple.jpg"
            alt="AirPods"
            class="product-img"
          />
          </a>
          <h2 class="product-title">Magic Mouse - Surface Multi-Touch noire</h2>
          <span class="price">119.00 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
        <!--Product 12-->
        <div class="product-box">
          <a href="#">
          <img
            src="../Images/eve-cam.jpg"
            alt="MacBook"
            class="product-img"
          />
          </a>
          <h2 class="product-title">Eve Cam</h2>
          <span class="price">219.95 $</span>
          <i class="fa-solid fa-cart-shopping add-cart"></i>
        </div>
      </div>
    </section>
  <?php
  require "tail2.php";
?>

</html>