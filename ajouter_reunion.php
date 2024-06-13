<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $titre=$_POST['titre'];
  $type=$_POST['type'];
  $debutdereunion=$_POST['debutdereunion'];
  $heure=$_POST['heure'];
 
  $requete="INSERT INTO reunion (titre, type, datereunion, heurereunion) VALUES (?,?, ?,?)";
  $params=array($titre,$type,$debutdereunion,$heure);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:reunion_rh.php');

?>
