<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $matricule=$_POST['matricule'];
  $date=$_POST['date'];
  $periode=$_POST['periode'];
  $montant=$_POST['montant'];
 
  $requete="INSERT INTO prets (matricule,date,periode,montant) VALUES (?,?,?,?)";
  $params=array($matricule,$date,$periode,$montant);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:prets.php');

?>