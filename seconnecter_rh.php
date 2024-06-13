<?php
  session_start();
  require_once("connexion_bd.php");
  $login=$_POST['email'];
  $mt=$_POST['motdepasse'];


 
  $requete="select *from employes where email='$login' and motdepasse='$mt'";
  $resultat=$pdo->query($requete);
  
  $requete2="select *from rh where email='$login' and motdepasse='$mt'";
  $resultat2=$pdo->query($requete2);

  $requete3="select *from admin where email='$login' and motdepasse='$mt'";
  $resultat3=$pdo->query($requete3);
  
  if ($user=$resultat->fetch()){
      if ($user['etat']==1){
          $_SESSION['user']=$user;
          header('location:profile_emp.php');
      }
      else{
          $_SESSION['erreurLogin']="<strong>Erreur!! </strong>votre compte est désactivé.<br> Veuillez contacter le responsable.";
          header('location:signin.php');
      }
  }
   else if ($user=$resultat2->fetch()){
          $_SESSION['user']=$user;
          header('location:profile_rh.php');
      }
      else if ($user=$resultat3->fetch()){
        $_SESSION['user']=$user;
        header('location:administrateur.php');
    }
  else {
      $_SESSION['erreurLogin']="<strong>Erreur!! </strong> Login ou mot de passe incorrecte ! ";
          header('location:signin.php');
  }
  

?>