<!-- navbar -->
<nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="../index.php"><img id="logo-comp" class="logo img-fluid" src="../Images/logoEnt1.png" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="explorer.php">Explorer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="postuler.php">Postuler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signIn.php">Se connecter</a>
          </li>
        </ul>
        <div class="d-flex align-items-center">
      <!-- Icon -->
      <button type="button" class="btn btn-light" id="open-cart"><a class="text-reset me-3" href="#!">
        <i class="fas fa-shopping-cart" id="cart-icon"></i>
      </a></button>
      <!--Shopping cart-->
      <div style="overflow-y: scroll; height:400px;" class="cart" id="panier">
          <h2 class="cart-title">Votre panier</h2>
          <!--Contenet cart-->
          <div class="cart-content"></div>
          
          <!--  total -->
          <div class="total">
            <div class="totalHT">
            <div class="total-title">Total Hors Taxes&#160</div>
            <div class="total-price">0.00 $</div>
          </div>
          <br>
          <div class="totalTTC">
            <div class="total-title">Total (taxes incluses)&#160</div>
            <div class="total-price-apres-taxes">0.00 $</div>
          </div>
          </div>
          <!--  Button type -->
          <button type="button" class="btn-buy">Passer la commande</button>
          <i class="bi bi-x" id="close-cart"></i>
      </div>
        </div>
      </div>
    </div>
  </nav>