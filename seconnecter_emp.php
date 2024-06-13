<?php
  session_start();
  require_once("connexion_bd.php");
  $login=$_POST['email'];
  $mt=$_POST['motdepasse'];

  $requete="select *from employes where email='$login' and motdepasse='$mt'";
  $resultat=$pdo->query($requete);
  
 
     if ($user=$resultat->fetch()){
          $_SESSION['user']=$user;
          header('location:profile_emp.php');
      }
  else {
      $_SESSION['erreurLogin']="<strong>Erreur!! </strong> Login ou mot de passe incorrecte ! ";
          header('location:employé.php');
  }
  

?>