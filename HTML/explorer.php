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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-1">
                <img src="../Images/iphone-13-pro-green-select.png" alt="apple watch" class="product-img" />
            </a>
            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg-1" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <iframe width="560" height="315"
                                                    src="https://www.youtube.com/embed/kV__iZuxDGE?autoplay=1?controls=0"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="../Images/iphone-13-pro-green-select.png" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="../Images/iphone-13-pro-green-select1.png" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="../Images/iphone-13-pro-green-select3.png" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 1</p>
                                        <h2>Apple iPhone 13 256Go</h2>
                                        <p>Code du produit: ABCD12345</p>
                                        <p class="price">1599.00 $</p>
                                        <p><b>Date de sortie: </b>24 septembre 2021</p>
                                        <p><b>Marque: </b>Apple</p>
                                        <p><b>Quantité en stock: </b>15</p>
                                        <p><strong>Weight</strong>: 174g<br>
                                            <strong>Dimensions</strong>: 146.7 x 71.5 x 7.7 mm<br>
                                            <strong>Display size</strong>: 6.1-inch<br>
                                            <strong>Resolution</strong>: 2532 x 1170<br>
                                            <strong>Refresh rate</strong>: 60Hz<br>
                                            <strong>Pixel density</strong>: 460ppi<br>
                                            <strong>Chipset</strong>: A15 Bionic<br>
                                            <strong>RAM</strong>: 4GB<br>
                                            <strong>Storage</strong>: 128GB / 256GB / 512GB<br>
                                            <strong>Rear cameras</strong>: 12MP + 12MP<br>
                                            <strong>Front camera</strong>: 12MP + 12MP<br>
                                            <strong>Battery</strong>: 3,240mAh&nbsp;
                                        </p>
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
        </div>
        <!--Product 2-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-2">
                <img src="../Images/iphone12.jpg" alt="iphone 13" class="product-img" />
            </a>
            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg-2" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/iphone12.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/iphone121.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/iphone122.jpg"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/iphone123.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 2</p>
                                        <h2>APPLE IPHONE 12 128GO</h2>
                                        <p>Code du produit: IPIDS12345</p>
                                        <p class="price">$899,45</p>
                                        <p><b>Date de sortie: </b>12/03/2020</p>
                                        <p><b>Marque: </b>Apple</p>
                                        <p><b>Quantité en stock: </b>40</p>
                                        <p><strong>Weight</strong>: 164g<br>
                                            <strong>Dimensions</strong>: 146.7 x 71.5 x 7.4mm<br>
                                            <strong>Display size</strong>: 6.1-inch<br>
                                            <strong>Resolution</strong>: 1170 x 2532<br>
                                            <strong>Refresh rate</strong>: 60Hz<br>
                                            <strong>Pixel density</strong>: 460ppi<br>
                                            <strong>Chipset</strong>: A14 Bionic<br>
                                            <strong>RAM</strong>: 4GB<br>
                                            <strong>Storage</strong>: 64GB / 128GB / 256GB<br>
                                            <strong>Rear cameras</strong>: 12MP + 12MP<br>
                                            <strong>Front camera</strong>: 12MP<br>
                                            <strong>Battery</strong>: N/A
                                        </p>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">Apple iPhone 12 128Go</h2>
            <span class="price">899.45 $</span>
        </div>
        <!--Product 3-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-3">
                <img src="../Images/SamsungGalaxyNote10+.webp" alt="AirPods" class="product-img" />
            </a>
            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg-3" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/SamsungGalaxyNote10+.webp"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/SamsungGalaxyNote10+1.webp"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/SamsungGalaxyNote10+2.webp"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/SamsungGalaxyNote10+3.webp"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/SamsungGalaxyNote10+4.webp"
                                                    alt="Fourth slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 3</p>
                                        <h2>GALAXY NOTE10, NOTE10+ 5G 246GO</h2>
                                        <p>Code du produit: SAMS134255</p>
                                        <p class="price">USD $799.00 </p>
                                        <p><b>Date de sortie: </b>26/11/2020</p>
                                        <p><b>Marque: </b>Samsung</p>
                                        <p><b>Quantité en stock: </b>12</p>
                                        <p><b>Weight: </b> 196g<br>
                                            <b>Dimensions:</b> 162.3 x 77.2 x 7.9 mm<br>
                                            <b>OS:</b> Android 9<br>
                                            <b>Screen size:</b> 6.8-inch<br>
                                            <b>Resolution:</b> QHD+<br>
                                            <b>CPU:</b> Octa-core chipset<br>
                                            <b>RAM:</b> 12GB<br>
                                            <b>Storage:</b> 256GB/512GB<br>
                                            <b>Battery:</b> &nbsp;4,300mAh<br>
                                            <b>Rear camera:</b> 16MP + 12MP + 12MP + VGA<br>
                                            <b>Front camera:</b> 10MP<br>
                                            <b>Waterproof: </b>IP68<br>
                                            <b>Headphone jack:</b> NO!<br>
                                            <b>Stylus:</b> S Pen
                                        </p>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">Galaxy Note10, Note10+ 5G 246Go</h2>
            <span class="price">799.00 $</span>
        </div>
        <!--Product 4-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-4">
                <img src="../Images/GooglePixel6Pro.png" alt="MacBook" class="product-img" />
            </a>
            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg-4" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/GooglePixel6Pro4.png"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/GooglePixel6Pro1.png"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/GooglePixel6Pro2.png"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/GooglePixel6Pro3.png"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 4</p>
                                        <h2>GOOGLE PIXEL 6 128GO</h2>
                                        <p>Code du produit: GOOG131454</p>
                                        <p class="price">USD $599.00 </p>
                                        <p><b>Date de sortie: </b>20/12/2019</p>
                                        <p><b>Marque: </b>GOOGLE</p>
                                        <p><b>Quantité en stock: </b>20</p>
                                        <ul>
                                            <li><strong>Écran:</strong> 6.4-inch 2380×1080 90Hz display</li>
                                            <li><strong>Stockage:</strong> 128GB/256GB</li>
                                            <li><strong>Mémoire:</strong> 8GB RAM</li>
                                            <li><strong>Biometrics:</strong> Under-display fingerprint sensor</li>
                                            <li><strong>Couleurs:</strong> Kinda Coral, Sorta Seafoam, Stormy Black</li>
                                            <li><strong>Cameras:</strong> Standard 50MP, Ultrawide 12MP, Selfie 8MP</li>
                                            <li><strong>Batterie:</strong> 4,614 mAh</li>
                                            <li><strong>Charging:</strong> 23W wired USB-C/21W wireless on Pixel Stand
                                            </li>
                                            <li><strong>Dimensions:</strong> 158.6 x 74.8 x 8.2mm</li>
                                            <li><strong>5G:</strong> Sub6, mmWave (US, Verizon &amp; AT&amp;T models
                                                only)</li>
                                            <li><strong>Autre:</strong> Gorilla Glass Victus, IP68 water resistance,
                                                USB-C 3.1</li>
                                            <li><strong>Prix:</strong> Starting at $599 US</li>
                                        </ul>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">Google Pixel 6 128Go</h2>
            <span class="price">599.00 $</span>
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
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-5">
                <img src="../Images/macbook-product.jpg" alt="apple watch" class="product-img" />
            </a>
            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg-5" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/macbook-product1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/macbook-product2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/macbook-product3.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 5</p>
                                        <h2>MACBOOK PRO 14 PO</h2>
                                        <p>Code du produit: MACB534664</p>
                                        <p class="price">USD $2499.00</p>
                                        <p><b>Date de sortie: </b>21/10/2021</p>
                                        <p><b>Marque: </b>Apple</p>
                                        <p><b>Quantité en stock: </b>20</p>
                                        <ul>
                                            <li>Apple M1 chip with 8‑core&nbsp;CPU, 8‑core&nbsp;GPU, and 16‑core Neural
                                                Engine</li>
                                            <li>8GB unified memory</li>
                                            <li>256GB SSD storage</li>
                                            <li>13-inch Retina display with True&nbsp;Tone</li>
                                            <li>Backlit Magic Keyboard – US English</li>
                                            <li>Touch&nbsp;Bar and Touch&nbsp;ID</li>
                                            <li>Two Thunderbolt / USB 4 ports</li>
                                        </ul>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">MacBook Pro 14 po</h2>
            <span class="price">2499.00 $</span>
        </div>
        <!--Product 6-->
        <div class="product-box">
            <a href="" data-toggle="modal" data-target=".bd-example-modal-lg-6">
                <img src="../Images/imac-po.jpg" alt="iphone 13" class="product-img" />
            </a>
            <!--Large modal-->
            <div class="modal fade bd-example-modal-lg-6" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/imac-po.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/imac-po1.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/imac-po2.jpg"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/imac-po3.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit num 7</p>
                                        <h2>IMAC 24 PO</h2>
                                        <p>Code du produit: IMAC0902574</p>
                                        <p class="price">USD $1849.00</p>
                                        <p><b>Date de sortie:</b>06/01/2022</p>
                                        <p><b>Marque: </b>Apple</p>
                                        <p><b>Quantité en stock: </b>30</p>
                                        <p><strong>CPU:</strong> Apple M1 (8-core)<br>
                                            <strong>Graphique:</strong> Integrated 8-core GPU<br>
                                            <strong>RAM:</strong> 16GB Unified LPDDR4 RAM<br>
                                            <strong>Écran:</strong> 24-inch, 4.5K 4,480 x 2,520 Retina display (IPS, 500
                                            nits brightness, wide color P3 gamut)<br>
                                            <strong>Strockage:</strong> 512GB SSD<br>
                                            <strong>Ports:</strong> 2x Thunderbolt USB 4 (USB-C), 2x USB 3 (USB-C),
                                            3.5mm headphone jack<br>
                                            <strong>Connectivity:</strong> Gigabit Ethernet, Wi-Fi 6, Bluetooth 5.0<br>
                                            <strong>Caméra:</strong> 1080p FaceTime HD webcam<br>
                                            <strong>Poids:</strong> 9.88 pounds (4.48kg)<br>
                                            <strong>Taille: </strong>18.1 x 21.5 x 5.8 inches (46.1 x 54.7 x 14.7cm; W x
                                            D x H)
                                        </p>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">iMac 24 po</h2>
            <span class="price">1849.00 $</span>
        </div>
        <!--Product 7-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-7">
                <img src="../Images/PcGamer-Ryzen.jpg" alt="AirPods" class="product-img" />
            </a>
            <!--Large modal-->
            <div class="modal fade bd-example-modal-lg-7" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/PcGamer-Ryzen1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/PcGamer-Ryzen2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/PcGamer-Ryzen3.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num7</p>
                                        <h2>SKYTECH ARCHANGEL GAMING COMPUTER PC DESKTOP – RYZEN</h2>
                                        <p>Code du produit: SKY98736703</p>
                                        <p class="price">USD $1049.99</p>
                                        <p><b>Date de sortie:</b>12/07/2020</p>
                                        <p><b>Marque: </b>RYZEN</p>
                                        <p><b>Quantité en stock: </b>55</p>
                                        <ul class="i8Z77e">
                                            <li class="TrT0Xe">Processor Model. AMD Ryzen 5 3000 Series.</li>
                                            <li class="TrT0Xe">Processor Model Number. 3600.</li>
                                            <li class="TrT0Xe">Processor Speed (Base) 3.6 gigahertz.</li>
                                            <li class="TrT0Xe">Storage Type. SSD.</li>
                                            <li class="TrT0Xe">Total Storage Capacity. 500 gigabytes.</li>
                                            <li class="TrT0Xe">Solid State Drive Capacity. 500 gigabytes.</li>
                                            <li class="TrT0Xe">System Memory (RAM) 16 gigabytes.</li>
                                            <li class="TrT0Xe">Graphics. NVIDIA GeForce GTX 1660 SUPER.</li>
                                        </ul>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">
                Skytech Archangel Gaming Computer PC Desktop – Ryzen
            </h2>
            <span class="price">1049.99 $</span>
        </div>
        <!--Product 8-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-8">
                <img src="../Images/Zenbook-Pro.webp" alt="MacBook" class="product-img" />
            </a>
            <!--Large modal-->
            <div class="modal fade bd-example-modal-lg-8" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/Zenbook-Pro1.webp"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/Zenbook-Pro2.webp"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/Zenbook-Pro3.webp"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 8</p>
                                        <h2>ZENBOOK PRO DUO 15 OLED (UX582, 11TH GEN INTEL)</h2>
                                        <p>Code du produit: ZEN6347056</p>
                                        <p class="price">USD $4199.00</p>
                                        <p><b>Date de sortie:</b>12/07/2020</p>
                                        <p><b>Marque: </b>ZENBOOK</p>
                                        <p><b>Quantité en stock: </b>6</p>
                                        <p>voici <strong>Asus ZenBook Pro Duo (UX582L)</strong><br>
                                            <strong>CPU:</strong> Intel Core i9-10980HK<br>
                                            <strong>Graphics:</strong> GeForce RTX 3070<br>
                                            <strong>RAM:</strong> 32GB<br>
                                            <strong>Écran (Main): </strong>15.6-inch 4K OLED (3840 x2160p)
                                            Touchscreen, &nbsp;0.2ms, 440 nits, Pantone-validated;
                                            <strong>(Secondary):</strong> 14-inch 3840 x 1100p, anti-glare IPS<br>
                                            <strong>Storage:</strong> 512GB PCIe SSD, 1TB HDD<br>
                                            <strong>Ports: </strong>1 x USB 3.2 Gen 2 Type-A, 2 x USB 3.2 Gen 2
                                            Type-C (Thunderbolt 3) supports display, 1 x HDMI 2.1, 1 x 3.5mm Combo
                                            Jack, 1x DC-in<strong><br>
                                                Connectivity: </strong>Wi-Fi 6, Bluetooth 5.0<br>
                                            <strong>Caméra:</strong> 720p Webcam<br>
                                            <strong>Poids:</strong> 5.16 lbs (2.34kg)<br>
                                            <strong>Size (W x D x H): </strong>14.17 x 9.81 x 0.85 ins (35.98 x
                                            24.92 x 21.5 mm)<br>
                                            <strong>Batterie:</strong>&nbsp;92 WHr
                                        </p>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">
                Zenbook Pro Duo 15 OLED (UX582, 11th Gen Intel)
            </h2>
            <span class="price">4199.00 $</span>
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
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-9">
                <img src="../Images/airpods-product.jpg" alt="Image de AirPods Pro d'Apple" class="product-img" />
            </a>
            <!--Large modal-->
            <div class="modal fade bd-example-modal-lg-9" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/airpods-product1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/airpods-product2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/airpods-product3.jpg"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/airpods-product4.jpg"
                                                    alt="Fourth slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 9</p>
                                        <h2>AIRPODS PRO</h2>
                                        <p>Code du produit: AIR852735</p>
                                        <p class="price">USD $329.00</p>
                                        <p><b>Date de sortie:</b>11/04/2021</p>
                                        <p><b>Marque: </b>Apple</p>
                                        <p><b>Quantité en stock: </b>14</p>
                                        <p><b>Description:</b>Les écouteurs AirPods Pro sont dotés de la technologie de
                                            suppression active du bruit pour une expérience sonore immersive. Le mode de
                                            transparence vous permet d'entendre votre environnement et les embouts à
                                            ajustement personnalisé offrent un confort quotidien pour une utilisation
                                            prolongée. Tout comme les AirPods, les AirPods Pro se connectent à votre
                                            iPhone ou Apple Watch comme par magie. De plus, ils sont prêts à l'emploi
                                            aussitôt déballés.</p>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">AirPods Pro</h2>
            <span class="price">329.00 $</span>
        </div>
        <!--Product 10-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-10">
                <img src="../Images/apple-watch.jpg" alt="Image d'Apple Watch d'Apple" class="product-img" />
            </a>
            <!--Large modal-->
            <div class="modal fade bd-example-modal-lg-10" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/apple-watch1.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/apple-watch2.jpg"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/apple-watch3.jpg"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/apple-watch4.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 10</p>
                                        <h2>APPLE WATCH SE</h2>
                                        <p>Code du produit: WATCH245889</p>
                                        <p class="price">USD $369.00</p>
                                        <p><b>Date de sortie:</b>14/05/2020</p>
                                        <p><b>Marque: </b>Apple</p>
                                        <p><b>Quantité en stock: </b>10</p>
                                        <h4>Description: </h4>
                                        <ul>
                                            <li>GPS, GLONASS, Galileo et QZSS</li>
                                            <li>Boussole</li>
                                            <li>Altimètre toujours activé</li>
                                            <li>Résistance à l’eau jusqu’à<br>
                                                <em>50 mètres<sup>1</sup></em>
                                            </li>
                                            <li>Capteur optique de fréquence cardiaque de 2ᵉ génération</li>
                                            <li>Appel d’urgence international<sup>3</sup></li>
                                            <li>Appel d’urgence<sup>2</sup></li>
                                            <li>Accéléromètre<br>
                                                <em>jusqu’à 32 g avec détection des chutes</em>
                                            </li>
                                            <li>Gyroscope</li>
                                            <li>Capteur de luminosité ambiante</li>
                                            <li>Haut-parleur</li>
                                            <li>Micro</li>
                                            <li>Apple Pay</li>
                                            <li>GymKit</li>
                                            <li>Capacité de 32 Go</li>
                                            <li>Dos en céramique et cristal de saphir</li>
                                        </ul>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">Apple Watch SE</h2>
            <span class="price">369.00 $</span>
        </div>
        <!--Product 11-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-11">
                <img src="../Images/souris-apple.jpg" alt="AirPods" class="product-img" />
            </a>
            <!--Large modal-->
            <div class="modal fade bd-example-modal-lg-11" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../Images/souris-apple1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/souris-apple2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/souris-apple3.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit Num 11</p>
                                        <h2>MAGIC MOUSE - SURFACE MULTI-TOUCH NOIRE</h2>
                                        <p>Code du produit: MOUSE24536</p>
                                        <p class="price">USD $119.00 </p>
                                        <p><b>Date de sortie:</b>12/09/2019</p>
                                        <p><b>Marque: </b>Apple</p>
                                        <p><b>Quantité en stock: </b>10</p>
                                        <p>Magic Mouse est sans fil et rechargeable, avec une conception de pied
                                            optimisée qui lui permet de glisser en douceur sur votre bureau. La surface
                                            Multi-Touch vous permet d'effectuer des gestes simples tels que glisser
                                            entre les pages Web et faire défiler les documents. La batterie rechargeable
                                            alimentera votre Magic Mouse pendant environ un mois ou plus entre les
                                            charges. Il est prêt à l'emploi et se couple automatiquement avec votre Mac,
                                            et il comprend un câble tissé USB-C vers Lightning qui vous permet de
                                            coupler et de charger en vous connectant à un port USB-C sur votre Mac.</p>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">Magic Mouse - Surface Multi-Touch noire</h2>
            <span class="price">119.00 $</span>
        </div>
        <!--Product 12-->
        <div class="product-box">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-12">
                <img src="../Images/eve-cam.jpg" alt="MacBook" class="product-img" />
            </a>
            <!--Large modal-->
            <div class="modal fade bd-example-modal-lg-12" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="min-width:90%">
                    <div class="modal-content">
                        <!--On ajout le contenu du modal window-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <iframe width="100%" height="350"
                                                    src="https://www.youtube.com/embed/41Bd15QLcaA"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/eve-cam1.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/eve-cam2.jpg"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/eve-cam3.jpg"
                                                    alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../Images/eve-cam4.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="col-md-7">
                                        <p class="no-produits text-center">Produit NUM 12</p>
                                        <h2>EVE CAM</h2>
                                        <p>Code du produit: EVE4235346</p>
                                        <p class="price">USD $219.95</p>
                                        <p><b>Date de sortie:</b>07/09/2020</p>
                                        <p><b>Marque</b>Apple</p>
                                        <p><b>Quantité en stock: </b>111</p>
                                        <ul>
                                            <li>Vidéo sécurisée Apple HomeKit avec vidéo H.264 1080p/24 ips et champ de
                                                vision de 157°</li>
                                            <li>Vision nocturne infrarouge</li>
                                            <li>Détection de mouvement infrarouge: 100°, jusqu'à 9m / 30 pieds à une
                                                hauteur de montage de 2,5m / 8,2pieds</li>
                                            <li>Communication bidirectionnelle avec microphone et haut-parleur intégrés
                                            </li>
                                            <li>Certifié IP55</li>
                                            <li>Réglage de l'angle de la caméra sur trois axes</li>
                                            <li>Projecteur avec amplification de lumière ultra-puissante</li>
                                            <li>Voyant d'état</li>
                                            <li>Alimentation: 100-240V CA, 50/60Hz</li>
                                            <li>Connexion sans fil: Wi-Fi (2,4GHz 802.11b/g/n)</li>
                                            <li>Dimensions: 170x65x76mm (HxLxP)/6,7×2,6x3pouces</li>
                                        </ul>
                                        <button type="button" class="btn btn-dark add-cart">Ajouter au panier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <h2 class="product-title">Eve Cam</h2>
            <span class="price">219.95 $</span>
        </div>
    </div>
</section>
<?php
  require "tail2.php";
?>

</html>