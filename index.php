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
            Lorem ipsum dolor sit amet consectetur adipisicing.
          </h1>
          <p class="text-white my-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Aspernatur quo labore earum officia neque doloribus nesciunt
            dolore voluptas, expedita consequatur.
          </p>
          <a href="HTML/explorer.html" class="btn btn-outline-light">Explorer</a>
        </div>
      </div>
    </div>
  </div>

  <!--list of products -->

  <!-- <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="header">
            <h3>Nouveautés</h3>
            <h2>Produits Populaires</h2>
          </div>
        </div>
      </div>
      <div class="row"> -->
        <!-- Product1 -->
        <!-- <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-1" class="single-product">
            <div class="part-1">
              <img src="Images/iphone-13-pro-green-select.png" alt="">
              <ul>
                <li><a href="#"><i class="fa-solid fa-cart-shopping add-cart"></i></a></li>
                <li><a href="#"><i class="fas fa-plus"></i></a></li>
              </ul>
            </div>
            <div class="part-2">
              <h3 class="product-title">Apple Watch SE</h3>
              <h4 class="product-price">369.00 $</h4>
            </div>
          </div>
        </div> -->
        <!-- Product2 -->
        <!-- <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-2" class="single-product">
            <div class="part-1">
              <span class="new">new</span>
              <ul>
                <li><a href="#"><i class="fa-solid fa-cart-shopping add-cart"></i></a></li>
                <li><a href="#"><i class="fas fa-plus"></i></a></li>
              </ul>
            </div>
            <div class="part-2">
              <h3 class="product-title">iPhone 13 Vert 128Go </h3>
              <h4 class="product-price">1599.00 $</h4>
            </div>
          </div>
        </div> -->
        <!-- Product3 -->
        <!-- <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-3" class="single-product">
            <div class="part-1">
              <ul>
                <li><a href="#"><i class="fa-solid fa-cart-shopping add-cart"></i></a></li>
                <li><a href="#"><i class="fas fa-plus"></i></a></li>
              </ul>
            </div>
            <div class="part-2">
              <h3 class="product-title">AirPods Pro</h3>
              <h4 class="product-price">329.00 $</h4>
            </div>
          </div>
        </div> -->
        <!-- Product4 -->
        <!-- <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-4" class="single-product">
            <div class="part-1">
              <span class="new">new</span>
              <ul>
                <li><a href="#"><i class="fa-solid fa-cart-shopping add-cart"></i></a></li>
                <li><a href="#"><i class="fas fa-plus"></i></a></li>
              </ul>
            </div>
            <div class="part-2">
              <h3 class="product-title">MacBook Pro 14 po </h3>
              <h4 class="product-price">2 499,00 $</h4>
            </div>
          </div>
        </div> -->
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
  <!--Carousel banner text-->
  <!-- <div class="container">
    <h1 id="header-carousel">Lorem ipsum dolor sit amet consectetur.</h1>
<div id="slider" class="carousel slide" data-bs-ride="caroussel">
     <div class="carousel-inner">
         <div class="item active">
             <div class="row">
                 <div class="col-sm-4">
                     <div>
                         <h3>Lorem ipsum dolor sit amet.</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque esse voluptatum, facilis reiciendis, iure ut maxime atque exercitationem dolor itaque voluptate. Consequatur soluta quo illo cumque, distinctio laudantium doloremque facilis!</p>
                     </div>
                 </div>
                 <div class="col-sm-8">
                    <img src="Images/tv_samsung.png" alt="">
                 </div>
             </div>
         </div>
         <div class="item">
             <div class="row">
                 <div class="col-sm-4">
                     <div>
                         <h3>Lorem ipsum dolor sit amet.</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque esse voluptatum, facilis reiciendis, iure ut maxime atque exercitationem dolor itaque voluptate. Consequatur soluta quo illo cumque, distinctio laudantium doloremque facilis!</p>
                     </div>
                 </div>
                 <div class="col-sm-8">
<img src="Images/airpods-product.jpg" alt="">
                 </div>
             </div>
         </div>
         <div class="item">
             <div class="row">
                 <div class="col-sm-4">
                     <div>
                         <h3>Lorem ipsum dolor sit amet.</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque esse voluptatum, facilis reiciendis, iure ut maxime atque exercitationem dolor itaque voluptate. Consequatur soluta quo illo cumque, distinctio laudantium doloremque facilis!</p>
                     </div>
                 </div>
                 <div class="col-sm-8">
<img src="Images/ps5.webp" alt="">
                 </div>
             </div>
         </div>
     </div>
</div>
</div>
-->

  <!-- banner section -->
  <section id="learn" class="p-5 bg-dark">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md p-5">
          <h2>Lorem ipsum dolor sit.</h2>
          <p class="lead">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam ipsum doloribus delectus ipsam commodi
            magnam et voluptates ex aliquam ea?
          </p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga sequi cumque, adipisci nulla quaerat nobis.
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
              Lorem ipsum dolor sit amet ?
            </button>
          </h2>
          <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla voluptate, iusto
              rerum reprehenderit eaque quam ea voluptatum doloremque dolor atque ipsam at et ab odio odit earum! Eos ad
              animi incidunt, placeat id corporis suscipit quaerat pariatur hic iusto deleniti rerum, cupiditate
              consequatur! Minima quam itaque culpa enim minus a.</div>
          </div>
        </div>
        <!--Item 2-->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#question-two">
              Lorem ipsum dolor sit amet ?
            </button>
          </h2>
          <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla voluptate, iusto
              rerum reprehenderit eaque quam ea voluptatum doloremque dolor atque ipsam at et ab odio odit earum! Eos ad
              animi incidunt, placeat id corporis suscipit quaerat pariatur hic iusto deleniti rerum, cupiditate
              consequatur! Minima quam itaque culpa enim minus a.</div>
          </div>
        </div>
        <!--Item 3-->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#question-three">
              Lorem ipsum dolor sit amet ?
            </button>
          </h2>
          <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla voluptate, iusto
              rerum reprehenderit eaque quam ea voluptatum doloremque dolor atque ipsam at et ab odio odit earum! Eos ad
              animi incidunt, placeat id corporis suscipit quaerat pariatur hic iusto deleniti rerum, cupiditate
              consequatur! Minima quam itaque culpa enim minus a.</div>
          </div>
        </div>
        <!-- Item 4-->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#question-four">
              Lorem ipsum dolor sit amet ?
            </button>
          </h2>
          <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla voluptate, iusto
              rerum reprehenderit eaque quam ea voluptatum doloremque dolor atque ipsam at et ab odio odit earum! Eos ad
              animi incidunt, placeat id corporis suscipit quaerat pariatur hic iusto deleniti rerum, cupiditate
              consequatur! Minima quam itaque culpa enim minus a.</div>
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