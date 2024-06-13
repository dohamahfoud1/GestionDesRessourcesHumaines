<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $matricule=$_POST['matricule'];
  $date=$_POST['date'];
 $avance=$_POST['avance'];
  $requete="INSERT INTO avances (matricule,date,avance) VALUES (?,?,?)";
  $params=array($matricule,$date,$avance);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:avances.php');

?>