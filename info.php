<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
       <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GLOBAL HOUSE | Information de la commende</title>
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

  
 <link rel="stylesheet" href="css/infoo.css" >
</head>
<body>
<header>
       <a href="#"><img class="logo" src="imj/GH.jpeg"></a>
      <ul>
                <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>  
       </ul>
</header>
    <section class="product-details">
         <div class="forme">
                <form class="form-horizontal" method="post" action="">
                    <div class=" panel-info">
                       <div class="panel-heading">Information personnele</div>
                       <div class="compt-info">
                              <strong>Nome:</strong>
                              <br><input type="fnam" autocomplete="off" id="fnam" placeholder="Prenom">
                              <input type="nam" autocomplete="off" id="nam" placeholder="Nom">
                              <br><strong>Contacte:</strong> 
                              <br><input type="email" autocomplete="off" id="email" placeholder="Mail">
                              <input type="tele" autocomplete="off" id="tele" placeholder="Numero de telephone">   
                       </div>
                    </div>
                    <div class=" panel-info">
                        <div class="panel-heading">Information de livreson</div>
                        <div class="compt-info">
                                <input type="text" name="address" id="addr" placeholder="Address">
                                <br><input type="text" name="city" id="wilaya" placeholder="Wilaya">
                                <div class= "date">
                                    <strong>Date de livrison:</strong>
                                    <br><input type="number" step="1" value="01" min="01" max="30">
                                    <input type="number" step="1" value="01" min="01" max="12">
                                    <input type="number" step="1" value="2022" min="2022" max="2050">
                                </div>
                        </div>
                    </div>

                    <div class=" panel-info">
                        <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> information de paiement</div>
                        <div class="compt-info">
                                <strong>Type de paiement:</strong>
                                <select id="CreditCardType" name="CreditCardType" >
                                        <option value="3">Carte d'or</option> 
                                        <option value="2">Carte boncare</option>
                                        <option value="1">Carte Visa</option>
                                </select placeholder="Numéro de carte">
                                <br><input type="text"  name="car_number" id="numcar" placeholder="Numéro de carte">
                                <br><input type="text"  name="car_code" id="codcar" placeholder="Mot de passe" >
                                
                        </div>
                    </div>

                </form>
         </div>
         <div class="produitss">
            <section class="produit">
               <div class="img">
                   <img src=" img/1/1.jpg"  alt="">
               </div>
               <div class="details">
                    <span class="product-price">200000DA</span>
                    <div class= qu>
                         <strong>Quantité</strong>
                         <input type="number" step="1" value="1" min="1" max="10">
                    </div>
               </div>
            </section>

            
         </div>

   </section>

                          <button type="submit"  class="btn"  ><a href="fact.php">Envoyé commende</a></button>          

    </body>
    </html>