<?php
 require_once("identifier.php");
?>
<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" type="image/png" href="gpi.png">
  <title>GPI-OFFRES EMPLOI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
    <div class="container  d-flex align-items-center" style="margin-right:9%">
    <a href="profile_rh.php" class="logo me-auto"><img src="gpi.png" alt="gpi"></a>
      <nav id="navbar"class=" navbar order-last order-lg-0">
        <ul>
          <li><a href="profile_rh.php">Profile</a></li>
          <li class="dropdown"><a href="#"><span>Nouveau employé</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="salarie.php">Fiche Salarié</a></li>
              <li><a href="creationcompte.php">Création du compte</a></li>
            </ul>
          </li>
  
      
    <li class="dropdown"><a href="#"><span>Employés</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="lister_employes.php">Liste des employés</a></li>
              <li><a href="archives_emp.php">Employés archivés</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Demandes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="documents.php">Documents administratifs</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Congés</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="conges_rh.php">consulter les Congés</a></li>
              <li><a href="conges_demandes.php">demandeurs de congés</a></li>
            </ul>
          </li>

          <li><a href="reunion_rh.php">Réunion</a></li>
          <li class="dropdown"><a href="#"><span>annoncements</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="annonce_public.php">public</a></li>
              <li><a href="annoncements_rh.php">privé</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Récrutement</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="recrutment.php?secteur=Achats">Achats</a></li>
              <li><a href="recrutment.php?secteur=Commercial,vente">Commercial,vente</a></li>
              <li><a href="recrutment.php?secteur=Gestion, comptabilité, finance">Gestion, comptabilité, finance</a></li>
              <li><a href="recrutment.php?secteur=Informatique, nouvelles technologies">Informatique, nouvelles technologies</a></li>
              <li><a href="recrutment.php?secteur=Juridique">Juridique</a></li>
              <li><a href="recrutment.php?secteur=Management, direction générale">Management, direction générale</a></li>
              <li><a href="recrutment.php?secteur=Marketing, communication">Marketing, communication</a></li>
              <li><a href="recrutment.php?secteur=Métiers de la santé et du social">Métiers de la santé et du social</a></li>
              <li><a href="recrutment.php?secteur=Métiers des services">Métiers des services</a></li>
              <li><a href="recrutment.php?secteur=Métiers du BTP">Métiers du BTP</a></li>
              <li><a href="recrutment.php?secteur=Production, maintenance, qualité">Production, maintenance, qualité</a></li>
              <li><a href="recrutment.php?secteur=R&D, gestion de projets">R&D, gestion de projets</a></li>
              <li><a href="recrutment.php?secteur=RH, formation">RH, formation</a></li>
              <li><a href="recrutment.php?secteur=Secrétariat, assistanat">Secrétariat, assistanat</a></li>
              <li><a href="recrutment.php?secteur=Télémarketing, téléassistance">Télémarketing, téléassistance</a></li>
              <li><a href="recrutment.php?secteur=Tourisme, hôtellerie, restauration">Tourisme, hôtellerie, restauration</a></li>
              <li><a href="recrutment.php?secteur=Transport, logistique">Transport, logistique</a></li>
            </ul>
          </li>
          <li><a href="facturation.php">Facturation</a></li>
          <a href="deconnexion.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" style="float:left; margin-left:3%;" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
</svg></a>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      
      </nav><!-- .navbar -->

    </div>
  </header>
  </body>
</html>