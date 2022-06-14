<?php
require 'config.php';
$DB  = new DB('');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GLOBAL HOUSE | As Simple As That</title>
    <script src="https://kit.fontawesome.com/f4cf10a13e.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="icon" href="http://example.com/favicon.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styl.css" />
</head>
<body>
<header>
       <a href="#"><img class="logo" src="GH.jpeg"></a>
          <ul>
             <li><a href="#">Acceuil</a></li>
             <li><a href="#">Nouveautés</a></li>
             <li><a href="#">Meubles</a></li>
             <li><a href="#">Marques</a></li>
             <li><a href="#">Contacte</a></li>
             <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>
                <!--<form action="" class="search-form">
                    <input type="search" id="search-box" placeholder="search here...">
                    <label for="search-box" class="fas fa-search"></label>
                </form>-->
            </a></li>
             <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>
                <div class="shopping-cart">
                    <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="lampe.jpg" alt="">
                        <div class="content">
                            <h3>Lampe de chevet</h3>
                            <span class="price">Prix : 57000DA</span>
                            <span class="quantity">Quantité : 1</span>
                        </div>
                    </div>
                    <div class="trait_dessus"><hr></div>
                    <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="acc.jpg" alt="">
                        <div class="content">
                            <h3>Accessoire de table</h3>
                            <span class="price">Prix : 45000DA</span>
                            <span class="quantity">Quantité : 1</span>
                        </div>
                    </div>
                    <div class="trait_dessus"><hr></div>
                    <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="table2.jpg" alt="">
                        <div class="content">
                            <h3>Table avec chaises modernes</h3>
                            <span class="price">Prix : 230000DA</span>
                            <span class="quantity">Quantité : 1</span>
                        </div>
                    </div>
                    <div class="trait_dessus"><hr></div>
                    <div class="total"> total : 332000DA </div>
                    <a href="#" class="btn">Valider</a>
                </div></a>
                </li>
             <!--<li><a href="#"><i class="fa-solid fa-user"></i>
                <form action="" class="login-form">
                    <h3>Connexion</h3>
                    <input type="email" placeholder="Votre email" class="box">
                    <input type="password" placeholder="Votre mot de passe" class="box">
                    <p>Vous n'avez pas un compte<a href="compte.html">Cliquez ici</a></p>
                    <input type="submit" value="Se connecter" class="btn">
                </form></a>
            </li>-->
             <li><a href="conecter.php"><i class="fa-solid fa-user"></i></a></li>
    </ul>
</header>


<div class="brown">
        <div class="slider">
       <img src="brown.jpeg" id="slide">
    </div>
</div>
    

<section id="product1" class="section-p1">
        <h2>Nouveauté chez<br>GLOBAL HOUSE</h2>
        <?php $products = $DB->query('SELECT * FROM products'); ?>
        <?php foreach ($products as $product):?>
        <div class="pro-container">
            <div class="pro">
                <img src="<?= $product->product_id; ?>.jpg">
                <div class="des">
                    <?php echo "$product->product_title <br/>" ?>
                    <!--<h3>Salle à manger</h3>-->
                    <?php echo "$product->product_desc <br/>" ?>
                    <!--<h4>Table avec chaises <br>-Korean style-</h4>-->

                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?= $product->product_price ?>DA</h4>
                    <!--<h4>224300DA</h4>-->
                </div>
                    <a href="#"><abbr title="AJOUTER AU PANIER"><i style="color:#59473e;" class="fa-solid fa-bag-shopping"></i></abbr></a>
            </div>

            <!-- <div class="pro">
                <img src="4.jpg" alt="">
                <div class="des">
                    <h3>Décoration</h3>
                    <h4>Détails d'intérieur <br>-Indian style-</h4>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>43999DA</h4>
                </div>
                <a href="#"><abbr title="AJOUTER AU PANIER"><i style="color:#59473e;" class="fa-solid fa-bag-shopping"></i></abbr></a>
            </div>
            <div class="pro">
                <img src="5.jpg" alt="">
                <div class="des">
                    <h3>Bahut & Fauteuil</h3>
                    <h4>Casual bahut avec fauteuil <br>-Casual style-</h4>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>157330DA</h4>
                </div>
                <a href="#"><abbr title="AJOUTER AU PANIER"><i style="color:#59473e;" class="fa-solid fa-bag-shopping"></i></abbr></a>
            </div>
            <div class="pro">
                <img src="3.jpg" alt="">
                <div class="des">
                    <h3>Décoration</h3>
                    <h4>Plateau décoratif & Bougies <br>-modern style-</h4>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                    </div>
                    <h4>25999DA</h4>
                </div>
                <a href="#"><abbr title="AJOUTER AU PANIER"><i style="color:#59473e;" class="fa-solid fa-bag-shopping"></i></abbr></a>
            </div> -->
            <?php endforeach ?>
        </div>
        
</section>


<script type="text/javascript">
window.addEventListener("scroll", function(){ 
    var header = document.querySelector("header");
header.classList.toggle("sticky", window.scrollY > 0);
})
</script>

<section id="product1" class="section-p1">
    <h2>Meubles</h2>
    <p>Parcourez notre sélection en ligne pour voir ce qui est en stock<br>
        et trouvez exactement ce que vous cherchiez</p>
        <?php $categories = $DB->query('SELECT * FROM categories'); ?>
        <?php foreach ($categories as $categorie):?>
    <div class="pro-container">
        <div class="pro">
         <img src="<?= $categorie->product_id; ?>.jpg">
            <div class="des">
             <?php echo "$categorie->cat_title <br/>" ?>
                <!--<h3>Salle à manger</h3>-->
                <button class="button">Voir tous</button>
            </div>
        </div>
        <?php endforeach ?>
    </div>    
    
        <!--<div class="pro">
            <img src="bahut.jpg" alt="">
            <div class="des">
                <h3>Bahut</h3>
                <button class="button">Voir tous</button>
            </div>
        </div>
        <div class="pro">
            <img src="cuisine.jpg" alt="">
            <div class="des">
                <h3>Cuisine</h3>
                <button class="button">Voir tous</button>
            </div>
        </div>
        <div class="pro">
            <img src="ro.jpg" alt="">
            <div class="des">
                <h3>Salon</h3>
                <button class="button">Voir tous</button>
            </div>
        </div>
        <div class="pro">
            <img src="stay.jpg" alt="">
            <div class="des">
                <h3>Fauteuil</h3>
                <button class="button">Voir tous</button>
            </div>
        </div>
        <div class="pro">
            <img src="bed.jpg" alt="">
            <div class="des">
                <h3>Chambre</h3>
                <button class="button">Voir tous</button>
            </div>
        </div>
        <div class="pro">
            <img src="bureau.jpg" alt="">
            <div class="des">
                <h3>Bureau</h3>
                <button class="button">Voir tous</button>
            </div>
        </div>
        <div class="pro">
            <img src="deco.jpg" alt="">
            <div class="des">
                <h3>Décoration</h3>
                <button class="button">Voir tous</button>
            </div>
        </div>-->
</section>

<section id="banner" class=".section-m1">
   <h4>OBTENEZ 10% DE REMISE</h4>
   <h2>Pour profiter de l'offre, utiliser notre code de remise <span>10%</span> après avoir sélectionné et ajouté un article dans votre panier</h2>
   <button class="normal">Voir tous</button>
</section>


<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="quality.jpg" alt="">
        <h6>Qualité</h6>
    </div>
    <div class="fe-box">
        <img src="online-store.jpg" alt="">
        <h6>Boutique en ligne</h6>
    </div>
    <div class="fe-box">
        <img src="like.jpg" alt="">
        <h6>Client satisfait</h6>
    </div>
    <div class="fe-box">
        <img src="delivery.jpg" alt="">
        <h6>Livraison</h6>
    </div>
    <div class="fe-box">
        <img src="discount.jpg" alt="">
        <h6>Remise</h6>
    </div>
</section>


<footer class="footer">
    <div class="con">
        <div class="row">
             <div class="footer-col">
                 <h4>Contactez-nous</h4>
                     <ul>
                        <li><p><strong>Adresse:</strong> 127 rue cherif chalabi blida 9000 Blida, Algérie</p></li>
                        <li><p><strong>Tél:</strong> +213 553 66 61 95</p></li>
                        <li><p><strong>Ouvert:</strong> 09:00 - 19:00, Sam - Jeu</p></li>
                     </ul>
             </div>
             <div class="footer-col">
                 <h4>Suivez-nous</h4>
                   <div class="icon">
                    <a href="https://www.facebook.com/globalhouseblida/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/global_house_09/"><i class="fab fa-instagram"></i></a>
                  </div>
             </div>
             <div class="footer-col">
                <h4>Mieux nous connaître</h4>
                    <ul>
                        <li><a href="qui-sommes-nous">Qui sommes-nous ?</a></li>
                        <li><a href="livraison">Livraison</a></li>
                        <li><a href="point-de-vente">Point de vente</a></li>
                        <li><a href="sur-carte">Sur carte</a></li>
                    </ul>
             </div>
             <div class="footer-col">
                 <h4>Moyens de paiement</h4>
                 <div class="icon">
                    <a hre="https://www.poste.dz"><img class="attachment-full size-full wvs-attachment-image jetpack-lazy-image jetpack-lazy-image--handled" src="https://homestyle.com.dz/wp-content/uploads/2020/07/CCP.svg" alt="CCP" width="20" height="20" data-pagespeed-url-hash="855110476" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" data-lazy-loaded="1" loading="eager"></a>
                    <a><img src="register.png" width="20" height="20"></a>
                    <a><img src="cheque.png" width="20" height="20"></a>
                 </div>
             </div>
             <div class="copyright">
        <p>© 2022 Tous droits réservés | GLOBAL HOUSE</p>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>