<?php
require_once("identifier.php");
require_once("connexion_bd.php");


if (isset($_POST['matricule']) && isset($_POST['mois']) && isset($_POST['annee'])) {

$matr=$_POST['matricule'];
$mois=$_POST['mois'];
$annee =$_POST['annee']; ;
$nombreDeJours = 31;

    // Requête SQL pour récupérer les autres champs de l'utilisateur
    $sql = "SELECT * FROM fiche_salarie WHERE matricule='$matr'";
    $resultat=$pdo->query($sql);
    $employes=$resultat->fetch();

    $nom=$employes['nom'];
    $prenom=$employes['prenom'];
    $salaire=$employes['salaire'];
    $matricule=$employes['Matricule'];
    $adresse=$employes['adresse'];
    $ville=$employes['ville'];
    $cnss=$employes['cnss'];
    $situation=$employes['situation'];
    $enfant=$employes['nombreEnfant'];

       
    $paiement=$employes['typepaiment'];
    $nombreJoursTravailles=26;
//*************************salaire Mensuelle ************
    $joursCalendaires = 26;
$salaireMensuel = ($salaire / $joursCalendaires) * $nombreJoursTravailles;

//************Nombre d'absences****************
$requete = "SELECT COUNT(*) AS nbr_absences FROM absences WHERE matricule=$matricule and MONTH(date) = $mois AND YEAR(date) = $annee";
$resultatAbs=$pdo->query($requete);
    $absences=$resultatAbs->fetch();
    $nbrAbs=$absences['nbr_absences'];

    //***********Jours ferier ****************
$requete2 = "SELECT COUNT(*) AS nbr_feriers FROM supplemantaire WHERE matricule=$matricule and MONTH(date) = $mois AND YEAR(date) = $annee and jourFerier='oui'";
$resultatFer=$pdo->query($requete2);
    $feriers=$resultatFer->fetch();
    $nbrFer=$feriers['nbr_feriers'];
 

     //***********Prix feriers et abs ****************
     $prix1 = "SELECT  SUM(prixJourFerier) AS totPrixFerier FROM supplemantaire where matricule=$matricule and  MONTH(date) = $mois AND YEAR(date) = $annee   "; // Prix unitaire pour chaque jour férié travaillé
     $prix2 ="SELECT  SUM(prixHeuresSupp) AS totPrisSupp FROM supplemantaire where matricule=$matricule and  MONTH(date) = $mois AND YEAR(date) = $annee   "; ; // Prix unitaire pour chaque jour d'absence
     $resultat2=$pdo->query($prix1);
     $resultat3=$pdo->query($prix2);
     $prixFeriers=$resultat2->fetch();
     $prixSupp=$resultat3->fetch();
       
     $prixJourFerier=$prixFeriers['totPrixFerier'];
     $prixJourAbsence=$prixSupp['totPrisSupp'];
     // Calcul du montant total
     $montantFeriers = $prixJourFerier * $nbrFer;
     $montantAbsences = (-$prixJourAbsence) * $nbrAbs;
     
     $montantTotal = $montantFeriers + $montantAbsences;



       //***********conges ****************
$requete3 = "SELECT *  FROM conges  WHERE matricule=$matricule and MONTH(datedebut)= $mois OR MONTH(datefin)= $mois  AND YEAR(datedebut) = $annee and YEAR(datefin) = $annee";
$resultat3=$pdo->query($requete3);
    $conges=$resultat3->fetch();
//$periode=round((strtotime($conges['datefin']) - strtotime($conges['datedebut']))/(60*60*24));


    //***********Jours heures supp****************
    $requete4 = "SELECT COUNT(*) AS nbr_supp FROM supplemantaire WHERE matricule=$matricule and MONTH(date) = $mois AND YEAR(date) = $annee ";
    $resultatsupp=$pdo->query($requete4);
        $supp=$resultatsupp->fetch();
        $nbrSupp=$supp['nbr_supp'];

//*********primes***********/
$primeANc = "SELECT SUM(montant) AS primes  FROM primes  WHERE matricule=$matricule and MONTH(date)= $mois  AND YEAR(date) = $annee and type='prime d\'ancienneté'";
$primePer = "SELECT SUM(montant) AS primes  FROM primes  WHERE matricule=$matricule and MONTH(date)= $mois  AND YEAR(date) = $annee and type='prime de performance'";
$primeParra = "SELECT SUM(montant) AS primes  FROM primes  WHERE matricule=$matricule and MONTH(date)= $mois  AND YEAR(date) = $annee and type='prime de parrainage'";
$primePro = "SELECT SUM(montant) AS primes  FROM primes  WHERE matricule=$matricule and MONTH(date)= $mois  AND YEAR(date) = $annee and type='prime de productivité'";
$primeFin = "SELECT SUM(montant) AS primes  FROM primes  WHERE matricule=$matricule and MONTH(date)= $mois  AND YEAR(date) = $annee and type='prime de fin d\'année'";
$primeBien = "SELECT SUM(montant) AS primes  FROM primes  WHERE matricule=$matricule and MONTH(date)= $mois  AND YEAR(date) = $annee and type='prime de bienvenue'";
$primeVac = "SELECT SUM(montant) AS primes  FROM primes  WHERE matricule=$matricule and MONTH(date)= $mois  AND YEAR(date) = $annee and type='prime de vacances'";
$res1=$pdo->query($primeANc);
$res2=$pdo->query($primePer);
$res3=$pdo->query($primeParra);
$res4=$pdo->query($primePro);
$res5=$pdo->query($primeFin);
$res6=$pdo->query($primeBien);
$res7=$pdo->query($primeVac);
    $anc=$res1->fetch();$per=$res2->fetch();$parra=$res3->fetch();$pro=$res4->fetch(); $fin=$res5->fetch();$bien=$res6->fetch(); $vac=$res7->fetch();
    if($anc['primes']==0) {$Anc=0;} else { $Anc=$anc['primes'];}
    $Anc=$anc['primes'];$Per=$per['primes'];$Parra=$parra['primes'];$Pro=$pro['primes'];$Fin=$fin['primes'];$Bien=$bien['primes'];$Vac=$vac['primes'];
  




    //*************salaire brut**************/
 function calculerSalaireBrut($salaireBase, $prime1, $prime2,$prime3, $prime4,$prime5, $prime6,$prime7) {
    // Calculer le montant total des primes
    $totalPrimes = $prime1 + $prime2 + $prime3 + $prime4 + $prime5 + $prime6 + $prime7;

    // Calculer le salaire brut
    $salaireBrut = $salaireBase + $totalPrimes;

    return $salaireBrut;
 }


$salaireBrut = calculerSalaireBrut($salaire, $Anc, $Per,$Parra,$Pro,$Fin,$Bien,$Vac);
    


//************calcul cnss *****************/
$tauxCnss = 0.048; // Taux de cotisation à la CNSS pour les salariés (4.8%)
$Tcnss = $salaireBrut * $tauxCnss;


//CSS
$tauxCSS = 0.05; 
$tauxRetenue = 0.2;

// Calcul de la retenue à la source en fonction de la situation familiale
if ($situation == 'célibataire') {
    $retenueSource = $salaireBrut * $tauxRetenue;
} elseif ($situation== 'marié' && $enfant > 0) {
    $retenueSource = ($salaireBrut - ($enfant * 1000)) * $tauxRetenue;
} else {
    $retenueSource = $salaireBrut * $tauxRetenue;
}

$css = $salaireBrut * $tauxCSS;

//****************salire net*************


// Calcul des cotisations de la CNSS
$cotisationsCnss = $salaireBrut * $Tcnss;

// Calcul du salaire net
$salaireNet = $salaireBrut - $cotisationsCnss;
}




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
              .registration-form{
	padding: 80px 0;
}

.registration-form form{
    background-color: #045894;;
   width:100%;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  
}


.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 10px;
}


@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
.form-group{
    margin-top: -6%;
}
.form-group label{
   color:white;
}
    </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-LIGHT">
        <?php include('menu_Facturation.php');?>         
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Salaires</div>
                            <a class="nav-link" href="fact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Salaire de base
                            </a>
                            <a class="nav-link" href="salaireBrut.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Salaire brut
                            </a>
                            <a class="nav-link" href="salaireImposable">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Salaire imposable
                            </a>
                            <a class="nav-link" href="salaireNet.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Salaire Net
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div >
    <div class="registration-form "  >
            <div class="row container">
                <div class="col-md-12" >
                <form method="post" action="salaireNet.php" style="margin-top:-3%;background-color: rgb(83, 181, 148);">
                 
                <div class="row">
                       <div class="col-md-3">
                        <div class="form-group">
                            
                            <input type="int" name="matricule" class="form-control item" id="matricule" placeholder="Matricule">
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-group">
                            <select id="mois" name="mois" class="form-select ch-vide  item ">
                                <option selected="selected">Mois</option>
                                <option value="1">Janvier</option>
                                        <option value="2">Février</option>
                                        <option value="3">Mars</option>
                                        <option value="4">Avril</option>
                                        <option value="5">Mai</option>
                                        <option value="6">Juin</option>
                                        <option value="7">Juillet</option>
                                        <option value="8">Août</option>
                                        <option value="9" >Séptembre</option>
                                        <option value="10">Octobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Décembre</option>
                                   </select>
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-group">
                            <input type="int" name="annee" class="form-control item" id="annee" placeholder="Année">
                        </div>
                       </div>
                       <div class="col-md-3">
    
                            <div class="mt-2 mr-3">
                                <button style="float: right;" type="submit" class="btn btn-outline-light bg-danger">chercher</button>
                            </div>
                       </div>
                   </div>
                   <br>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label>Situation</label>
            <input type="text" name="situation" class="form-control item" id="situation" value="<?php echo isset($situation) ? $situation : ''?>">
        </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <label>Nombre enfant</label>
        <input type="int"  name="nbrenf" class="form-control item" placeholder="" value="<?php  echo isset($enfant) ? $enfant : ''?>" />
    </div>
</div>


</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>CSS</label>
<input type="float" id="css" name="css" class="form-control item"  value="<?php  echo isset($css) ? $css : ''?>" />
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label for="">Retenue à la source</label>
<input type="float" name="retenue" class="form-control item"  value="<?php  echo isset($retenueSource) ? $retenueSource : ''?>">
</div>
</div>
</div>



<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="">Salaire Net</label>
<input type="float" name="brut" class="form-control item"  value="<?php  echo isset($salaireNet) ? $salaireNet : ''?>">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<button style="float: right;" type="submit" class="btn mt-4 btn-outline-light bg-danger">Salaire Net</button>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Avances</label>
<input type="float" name="avances" class="form-control item" placeholder="" value="" />
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Retenue sur pret</label>
<input type="float" name="retenuesurpret" class="form-control item"  >
</div>
</div>

</div>




<div class="row">

<div class="col-md-4">
<div class="form-group">
<LAbel>Net à payer</LAbel>
<input type="text" name="netApayer" class="form-control item" id="feriers" placeholder="Jours Feries Travaillés">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="">Type de paiement</label>
<input type="text" name="typePaiement" class="form-control item"  placeholder="Prix">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<button style="float: right;" type="submit" class="btn mt-4 btn-outline-light bg-danger">Net à payer</button>
</div>
</div>
</div>


</form>
                </div>

                    </div>
                </main>
        
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
