<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start the session
session_start();
// check if users already logged in 
if(isset($_SESSION['password'])) {
    if ($_SESSION["type"]=="client") {
     header('location:client.php');
     exit();   
 }
 if ($_SESSION["type"]=="admin") {
     header('location:admin.php');
     exit();   
 }

}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GLOBAL HOUSE |se connecter</title>
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
    <link rel="stylesheet" href="css/comptt.css">
</head>
<body>
<header>
       <a href="#"><img class="logo" src="imj/GH.jpeg"></a>
          <ul>
             <li><a href="home.php">Acceuil</a></li>
             <li><a href="home.php#nouveauté">Nouveautés</a></li>
             <li><a href="#">Meubles</a></li>
             <li><a href="#">Marques</a></li>
             <li ><a   href="contact.php">Contacte</a></li>


             <!--<li><form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fa-solid fa-magnifying-glass"></label>
                </form>
            </li>-->


             <li><a href="recherche.html"><i class="fa-solid fa-magnifying-glass"></i></a></li>
             <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
             <li><a class="con"  href="user.html"><i class="fa-solid fa-user"></i></a></li>
    </ul>
</header>
     <div>
        <form class="compt-info" action="" method="post">
            <input type="email" autocomplete="off" id="mail" name="mail" placeholder="Mail">
            <br><input type="password" autocomplete="off" id="password" name="password" placeholder="Mot de passe">
            <br><input type="submit" name="submit" class="send-btn" value="connecter">
             <a href="creecmpt.php" class="link">cree un compte?</a>
              <p style="color: red; margin-top: 10px">
             <?php
        if(!empty($_POST)) { 
            $mail = $_POST['mail'];
            $password = $_POST['password'];


            if(empty($mail) == true OR empty($password) == true ) {
                echo "Username ou Password champs est vide <br />";
            }
            else{
    	// if username exists
               $result = mysqli_query($conn,"SELECT * FROM util WHERE mail = '$mail' ");
               $cmpt = mysqli_num_rows($result);
               if ($cmpt > 0){
    		// check username and password
                  $password = $password;
                  $result = mysqli_query($conn,"SELECT * FROM util WHERE mail = '$mail' AND password = '$password'");
                  $cmpt = mysqli_num_rows($result);
                  
                  if ($cmpt == 1){
                    $n = mysqli_fetch_array($result);
    			// Set session variables
                     $_SESSION["mail"]=$_POST['mail'];
                     $_SESSION["password"]=$_POST['password'];
                     $_SESSION["type"]=$n["type"];
                     if ($n["type"]=="admin") {
                     header('location:admin.php');
                     exit();    
                     }
                     if ($n["type"]=="client") {
                     header('location:client.php');
                     exit();    
                     }
                    
                 }
                 else{
                     echo " Password est incorrect";
                 }
             }
             else{
              echo "Username n'exist pas";
          }
      }
  }
  
  ?>
  </p>
        </form>
    
       
    </div>
   
<script src="js/script2.js"></script>
</body>
</html>