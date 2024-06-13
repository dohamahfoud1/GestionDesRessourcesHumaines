<?php
 require_once("identifier.php");
 require_once("connexion_bd.php");
 $matricule= $_SESSION['user']['Matricule'];
 $requete="select * from fiche_salarie where matricule=$matricule";
 $resultatR=$pdo->query($requete);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
 
 
 <style>
.main-body {
    padding: 15px;
    margin-top: 4%;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
  </style>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body style="background-color:  ">

  <?php include('Menu_emp.php');?>

  <div class="container" style="margin-top:8%;" >
  <form class="" id="" name="" method="post" action="modif_profile_emp.php" >
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                <?php while($employes=$resultatR->fetch()){ ?>
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="employé.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $employes['nom'];?></h4>
                      <p class="text-secondary mb-1"><?php echo $employes['fonction'];?></p></p>
                      <i class="far fa-edit fa-2x mb-4 "></i>
                    
                    </div>
                  </div>
                </div>
              </div>
       
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h4 class="mb-0">Informations</h4>
                    </div>
          
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $employes['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date de naissance</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $employes['dateNaissance']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Adresse</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $employes['adresse']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mission</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $employes['mission']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Fonction</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $employes['fonction']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                    <input class="btn btn-info "  type="submit"  value="Modifier mes informations">
                   
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>




            </div>
          </div>
</form>
        </div>
    </div>



  </body>
  </html>