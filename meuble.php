<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "global house";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
ob_start();
// Start the session
session_start();
// check if users already logged in 
if(isset($_SESSION['password'])) {
    if ($_SESSION["type"]=="client") {
     header('location:client.php');
     exit();   
 }
 
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GLOBAL HOUSE | Meuble</title>
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
    
    <link rel="stylesheet" href="css/meuble.css">

</head>

<body>
<header>
       <a href="#"><img class="logo" src="imj/GH.jpeg"></a>
       <ul>
            <li ><a href="home.php">Acceuil</a></li>
             <li><a href="home.php#nouveauté">Nouveautés</a></li>
             <li><a  class="con" href= "#">Meubles</a></li>
             <li><a href="../marques/HTMLPage2.html">Marques</a></li>
             <li><a href="Contact.php">Contacte</a></li>


             <!--<li><form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fa-solid fa-magnifying-glass"></label>
                </form>
            </li>-->


             <li><a href="recherche.html"><i class="fa-solid fa-magnifying-glass"></i></a></li>
             <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
             <li><a href="conecter.php"><i class="fa-solid fa-user"></i></a></li>
    </ul>
</header>
  <h1> Chambre a coucher </h1>
  <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <img src="img/1/1.jpg" class="product-thumb" alt="">
            <button class="card-btn"><a href="produit.php">plus</a></button>
        </div>
        <div class="product-info">
            <span class="price">340000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/1/2.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">350000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/1/3.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">420000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/1/4.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">300000DA</span>
        </div>
    </div>
     <div class="product-card">
        <div class="product-image">
            <img src="img/1/5.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">290000DA</span>
        </div>
    </div>
     <div class="product-card">
        <div class="product-image">
            <img src="img/1/6.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">300000DA</span>
        </div>
    </div>
     <div class="product-card">
        <div class="product-image">
            <img src="img/1/7.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">390000DA</span>
        </div>
    </div>
  </div>

   <h1> sallon </h1>
  <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <img src="img/2/1.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">150000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/2/2.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">250000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/2/3.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">320000DA</span>
        </div>
    </div>
  </div>

   <h1>   Meuble salon-sejour </h1>
  <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <img src="img/3/1.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">110000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/3/2.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">200000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/3/3.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">150000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/3/4.png" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">100000DA</span>
        </div>
    </div>
  </div>
   <h1>   Salle a monger </h1>
   <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <img src="img/4/1.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">210000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/4/2.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">200000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/4/3.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">150000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/4/4.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">210000DA</span>
        </div>
    </div>
  </div>
   <h1> Chambre d'enfant </h1>
  <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <img src="img/5/1.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">450000DA</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="img/5/2.jpg" class="product-thumb" alt="">
            <button class="card-btn">plus</button>
        </div>
        <div class="product-info">
            <span class="price">300000DA</span>
        </div>
    </div>
  </div>
   <p class="footer">© 2022 Tous droits réservés | GLOBAL HOUSE</p>
</body>
</html>