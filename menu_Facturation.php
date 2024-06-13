<?php
 require_once("identifier.php");
?>
<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" type="image/png" href="gpi.png">
  <title>GPI-Facturation</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet"> 
    <link href="navbar-top.css" rel="stylesheet">
  </head>
  <body>

  <header id="header" class="fixed-top">
    <div class="container  d-flex align-items-center" style="margin-right:5%;">
    <a href="profile_rh.php" class="logo me-auto"><img src="gpi.png" alt="gpi"></a>
      <nav id="navbar"class=" navbar order-last order-lg-0">
        <ul>
        <li><a href="profile_rh.php">Profile</a></li>
          <li class="dropdown"><a href="#"><span>Gestion de présence</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="gestionDesAbsences.php">Gestion Absences</a></li>
              <li><a href="gestionConges.php">Gestion Congés</a></li>
              <li><a href="supplemantaire.php">Gestion Supplémentaire</a></li>
            </ul>
          </li>
         
          <li class="dropdown"><a href="#"><span>Gestion des avances et des primes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="primes.php">Gestion des primes</a></li>
              <li><a href="avances.php">Gestion des avances</a></li>
              <li><a href="prets.php">Gestion des préts</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Calcule des avances et des primes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="fact.php">Calcule de salaire</a></li>
            </ul>
          </li>
         
        <i class="bi bi-list mobile-nav-toggle"></i>
      
      </nav><!-- .navbar -->

    </div>
  </header>
  </body>
</html>