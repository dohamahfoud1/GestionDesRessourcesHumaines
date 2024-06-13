<?php
  require_once("connexion_bd.php");
  $requete="select * from annonce_public";
  $resultatR=$pdo->query($requete);
?>

<!DOCTYPE html>
<html lang="en">
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

 
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
         <a href="Acceui.php" class="logo me-auto"><img src="gpi.png" alt="gpi"></a>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="Acceuil.php" >Acceuil</a></li>
              <li><a href="offres_emploi.php" class="active">Offres d'emploi</a></li>
              <li><a href="formulaire.html">candidature</a></li>
              <li><a href="signin.php">Se connecter</a></li>
              
    
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
    
        </div>
      </header>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="background-color: rgb(27, 140, 140);">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>OFFRES D'EMPLOI</h2>
          <ol>
            <li><a href="Acceuil.php">ACCEUIL</a></li>
            <li>OFFRES-EMPLOI</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
         
            <section id="services" class="services ">
                <div class="container" data-aos="fade-up">
                  <div class="row" style="margin-top: -8%;">
                  <?php while($annoncement=$resultatR->fetch()){ ?>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">  
                      <div class="icon-box iconbox-blue">
                        <div>
                          <img src="offre.webp" style="width: 320px; height: 200px; margin-left: -7%;">
                        </div>
                  <span style="color: rgb(221, 3, 3); margin-left: -70%;" class="bi bi-calendar-date "></span> <a href="blog-single.html"><time  class="text-muted" datetime="2020-01-01"><?php echo $annoncement['date_pub'] ?></time></a>
                        <h4 ><a style="color: rgb(3, 3, 89); margin-left: -6%;" href=""><?php echo $annoncement['titre'] ?></a></h4>
                        <p style="margin-left: -6%;"><?php echo $annoncement['résumé'] ?></p>
          <a type="button" class="btn btn-danger" style="float: left; margin-top: 5%;">Lire La suite</a>
          <a href="formulaire.html" type="button" class="btn btn-danger" style="float: left; margin-top: 5%;margin-left: 3%;">Postuler</a>
                      </div>
                      
                    </div>
                    <?php } ?> 
                  </div> 
                       
                  </div>
              </section>

            <!-- End blog entry -->

            <!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                <li ><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form " >
                <form action="">
                  <input type="text">
                  <button style="background-color: rgb(1, 103, 103);" type="submit"><i  class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
             <br>
             <br>
              <h3 class="sidebar-title">Secteurs d'activité</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Automobile <span>(25)</span></a></li>
                  <li><a href="#">Aéronautique <span>(12)</span></a></li>
                  <li><a href="#">Agriculture <span>(5)</span></a></li>
                  <li><a href="#">Génie civile & BTP <span>(22)</span></a></li>
                  <li><a href="#">Hôtellerie & tourisme <span>(8)</span></a></li>
                  <li><a href="#">Logistique <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

             
             
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>IMAGINE UN
              ENDROIT</h3>  <br><br>
            <p>
              <strong>Téléphone:</strong> 05 22 351 979<br>
              <strong>Adresse:</strong>  Imm. Lilya 2 boulevard Grande Ceinture Ain Sebaa Casablanca<br>
              <strong>Horaire:</strong> 8:30 p.m - 18:00 p.m<br>
            </p>
          </div>

   

         


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          © COPYRIGHT 2014. "KONCEPT" BY NUNFOREST. ALL RIGHTS RESERVED.
        </div>
        <div class="credits">
         
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.gpi-interim.com/index.html" class="gmail"><i class="bx bxl-google"></i></a>
        <a href="https://www.facebook.com/General-Private-Interim-105099888017994/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/gpi138/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/general-private-interim-gpi/?viewAsMember=true" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
</body>
</html>