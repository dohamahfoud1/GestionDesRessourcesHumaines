<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $matricule=$_POST['matricule'];
  $date=$_POST['date'];
 
  $requete="INSERT INTO absences (matricule,date) VALUES (?,?)";
  $params=array($matricule,$date);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:gestionDesAbsences.php');

?>