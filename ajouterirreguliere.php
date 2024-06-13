<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $matricule=$_POST['matricule'];
  $indemnite='irréguliére';
  $type=$_POST['type'];
  $date=$_POST['date'];
  $montant=$_POST['montant'];
 
  $requete="INSERT INTO primes (matricule,indemnite,type,date,montant) VALUES (?,?,?,?,?)";
  $params=array($matricule,$indemnite,$type,$date,$montant);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:irreguliere.php');

?>