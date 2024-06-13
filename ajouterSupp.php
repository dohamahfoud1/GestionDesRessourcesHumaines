<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $matricule=$_POST['matricule'];
  $ferier=$_POST['ferier'];
  $coefferier=$_POST['coefferier'];
  $supp=$_POST['supp'];
  $coefsupp=$_POST['coefsupp'];
  $date=$_POST['date'];
 
  $requete="INSERT INTO supplemantaire (matricule,date,jourFerier,coefJourFerier,heuresSupp,coefHeuresSupp) VALUES (?,?,?,?,?,?)";
  $params=array($matricule,$date,$ferier,$coefferier,$supp,$coefsupp);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:supplemantaire.php');

?>