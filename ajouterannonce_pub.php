<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $titre=$_POST['titre'];
  $t1=$_POST['t1'];
  $datepub=$_POST['datepub'];
  $resume=$_POST['resume'];
  $region=$_POST['region'];
  $metier=$_POST['metier'];
 
  $requete="INSERT INTO annonce_public (titre,date_pub,résumé,description,métier,region) VALUES (?,?,?,?,?,?)";
  $params=array($titre,$datepub,$resume,$t1,$metier,$region);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:annonce_public.php');

?>