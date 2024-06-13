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

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .registration-form{
	padding: 80px 0;
}

.registration-form form{
    background-color: #0566ba;
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
<body>
 <?php include('menu_Facturation.php');?>
 <div >
    <div class="registration-form "  >
            <div class="row container">
                <div class="col-md-8" >
                    <form method="post" action="calculesalaire.php">
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
                                        <option>Mars</option>
                                        <option>Avril</option>
                                        <option>Mai</option>
                                        <option>Juin</option>
                                        <option>Juillet</option>
                                        <option>Août</option>
                                        <option>Séptembre</option>
                                        <option>Octobre</option>
                                        <option>Novembre</option>
                                        <option>Décembre</option>
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
                    <div class="col-md-4">
                     <div class="form-group" >
                        <label>Matricule</label>
                         <input type="int" name="matr" class="form-control item" id="matricule" value="<?php echo $matricule?>">
                     </div>
                    </div>
                    <div class="col-md-4">
                     <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control item" id="nom" value="<?php echo $nom?>">
                     </div>
                    </div>
                    <div class="col-md-4">
                     <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="prenom" class="form-control item" id="prenom" value="<?php echo $prenom?>">
                     </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" id="adresse" name="adresse" class="form-control item" value="<?php echo $adresse?>" />
                    </div>
        </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Ville</label>
                    <input type="text" name="ville" class="form-control item" id="ville" value="<?php echo $ville?>">
                </div>
            </div>
           
        </div>

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Salaire</label>
                <input type="float" id="Salaire" name="salaire" class="form-control item"  value="<?php echo $salaire?>" />
            </div>
</div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Mens/Hor</label>
            <input type="text" name="typesalaire" class="form-control item" id="typesalaire" value="<?php echo $paiement?>">
        </div>
    </div>
    
</div>


<div class="row mb-4" >
    <div class="col-md-6">
            <div class="form-group">
                <label >Nbre jours/h travaillé</label>
                <input type="int" name="nbr_jours_trav" class="form-control item" id="nbr_jours_trav" value="<?php echo $nombreJoursTravailles?>">
            </div>
</div>
<div class="col-md-6">
<div class="form-group">
    <label for="">Salaire Mensuelle</label>
    <input type="float" name="salaireMensuelle" class="form-control item"  value="<?php echo $salaireMensuel?>">
</div>
</div>

</div>



<div class="row">

    <div class="form-group"  >
        <label for="">Absences</label>
        <input type="text" id="absences" name="absences" class="form-control item"  value="<?php echo $nbrAbs?>" />
    </div>

</div>


<div class="row">

<div class="col-md-6">
<div class="form-group">
    <LAbel>Jours Feries Travaillés</LAbel>
    <input type="text" name="feriers" class="form-control item" id="feriers" value="<?php echo $nbrFer?>">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
    <label for="">Prix</label>
    <input type="text" name="prixF" class="form-control item" id="prixF" value="<?php echo $montantTotal?>">
</div>
</div>
</div>



<div class="row">

    <div class="col-md-6">
    <div class="form-group">
        <LAbel>Jours de congés</LAbel>
        <input type="text" name="conge" class="form-control item" id="feriers" value="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
        <label for="">Prix</label>
        <input type="text" name="prixC" class="form-control item" id="prixF" placeholder="">
    </div>
    </div>
    </div>



    <div class="row">

        <div class="col-md-6">
        <div class="form-group">
            <LAbel>Heures Supp</LAbel>
            <input type="text" name="supp" class="form-control item" id="supp" value="<?php echo $nbrSupp ?>">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">Prix</label>
            <input type="text" name="prixH" class="form-control item" id="prixH" placeholder="">
        </div>
        </div>
        </div>
    











            </form>
                </div>

     <div class="col-md-4" >
    <form style="width: 550px; margin-left: -4%; background-color: rgb(18, 68, 65);">
        <div class="row" >
            <div class="col-md-6">
                <div class="form-group">
                    <LAbel>prime d'ancienneté</LAbel>
                    <input type="float" name="primeP" class="form-control item" value="<?php echo $Anc ?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">prime de performance</label>
                    <input type="float" name="primeT" class="form-control item" value="<?php echo $Per ?>">
                </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-6">
                    

                <div class="form-group">
                    <label for="">prime de parrainage</label>
                    <input type="float" name="primePan" class="form-control item"  value="<?php echo $Parra ?>">
                </div>
                </div>
                <div class="col-md-6">
            <div class="form-group">
                <label for="">prime de productivité</label>
                <input type="float" name="primeEnc" class="form-control item"  value="<?php echo $Pro ?>">
            </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                    <LAbel>prime de fin d'année</LAbel>
                    <input type="float" name="primeFonc" class="form-control item" value="<?php echo $Fin ?>">
                </div>
                </div>
                <div class="col-md-6">
    <div class="form-group">
        <label for="">prime de vacances</label>
        <input type="float" name="primeAcc" class="form-control item"  value="<?php echo $Vac ?>">
    </div>
    </div>
    </div>


<div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label for="">prime de bienvenue</label>
        <input type="float" name="primeAcc" class="form-control item"  value="<?php echo $Bien ?>">
    </div>
    </div>
   
    <div class="col-md-6">
        <div class="form-group">
            <LAbel>Autre Primes</LAbel>
            <input type="float" name="primeAutre" class="form-control item" value="0">
        </div>
        </div>
</div>
<div class="row">
    <div class="form-group">
        <label for="">Prime et idemnité service manuellement</label>
        <input type="float" name="idemnite" class="form-control item">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label for="">Salaire brut</label>
        <input type="float" name="brut" class="form-control item" value="<?php echo $salaireBrut ?>">
    </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <button style="float: right;" type="submit" class="btn mt-4 btn-outline-light bg-danger">Salaire brut</button>
        </div>
        </div>
</div>

    </form>
     </div>
           </div>
 
    </div>
  
 </div>




 <div >
    <div class="registration-form "   >
            <div class="row container" >
                <div class="col-md-8" >
                    <form style="margin-top: -20%;background-color: rgb(83, 181, 148);">

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Situation</label>
                            <input type="text" name="situation" class="form-control item" id="situation" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre enfant</label>
                        <input type="int"  name="nbrenf" class="form-control item" placeholder="" value="" />
                    </div>
        </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre enfant inf</label>
                    <input type="int" name="nbrenfinf" class="form-control item"  placeholder="">
                </div>
            </div>
          
        </div>

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>CSS</label>
                <input type="float" id="css" name="css" class="form-control item" placeholder="" value="" />
            </div>
</div>
    <div class="col-md-6">
        <div class="form-group">
            <label>TFP</label>
            <input type="float" name="tfp" class="form-control item"  placeholder="Mens/Hor">
        </div>
    </div>
    
</div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label for="">Retenue à la source</label>
        <input type="float" name="retenue" class="form-control item"  placeholder="">
    </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <button style="float: right;" type="submit" class="btn mt-4 btn-outline-light bg-danger">Retenue à la source</button>
        </div>
        </div>
</div>



<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label for="">Salaire Net</label>
        <input type="float" name="brut" class="form-control item"  placeholder="">
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

     <div class="col-md-4" >
    <form style="width: 550px; margin-left: -4%; margin-top: -90%; background-color: rgb(184, 50, 75);">
        <div class="row" >
            <div class="col-md-6">
                <div class="form-group">
                    <LAbel>Num CNSS</LAbel>
                    <input type="float" name="cnss" class="form-control item" value="<?php echo $cnss ?>" >
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">Calcul CNSS</label>
                    <input type="float" name="calculCnss" class="form-control item" id="primeT" value="<?php echo $Tcnss?>">
                </div>
                </div>
        </div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label for="">Salaire imposable</label>
        <input type="float" name="imposable" class="form-control item"  placeholder="">
    </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <button style="float: right;" type="submit" class="btn mt-4 btn-outline-light bg-danger">Salaire imposable</button>
        </div>
        </div>
</div>

    </form>







     </div>




                
            </div>
 
    </div>
   
 </div>
 
</body>
</html>