<!-- navbar -->
<nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img id="logo-comp" class="logo img-fluid" src="Images/logoEnt1.png"
                alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="HTML/explorer.php">Explorer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="HTML/about.php">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="HTML/postuler.php">Postuler</a>
                </li>
                <li class="nav-item">
                    <?php if(!isset($value)) {
                        echo "<a class='nav-link' href='HTML/signIn.php'>Se connecter</a>";
                    }  
                    else {
                        echo "<a class='nav-link disabled' href='HTML/signIn.php'>Se connecter</a>";
                    }
                    ?>
                </li>
                <li class="nav-item dropdown" style="list-style:none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Admin
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="HTML/utilisateurs.php">Liste des utilisateurs</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="HTML/demandes.php">Liste des demandes d'emploi</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <button type="button" class="btn btn-light" id="open-cart">
                    <a class="text-reset me-3" href="HTML/cart.php">
                        <i class="fas fa-shopping-cart" id="cart-icon"></i> </a><sup class="cartCount">0</sup>
                </button>
            </div>
        </div>
    </div>
</nav>