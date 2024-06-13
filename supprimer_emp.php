<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexion_bd.php");

  $id=$_GET['idemp'];
  $requete="insert into employesarchiver SELECT '',nom,prenom,genre,cin,dateNaissance,adresse,ville,pays,situation,cnss,modepaiment,numcompte,societe,salaire,typepaiment,fonction,mission,datedebut,datefin''FROM fiche_salarie WHERE idsalarie=$id";
  $requete2="delete from fiche_salarie where idsalarie=$id";
  $resultat=$pdo->prepare($requete);
  $resultat2=$pdo->prepare($requete2);
  $resultat->execute();
  $resultat2->execute();
  

  }
?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "l'employé a été archivé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "lister_employes.php";
             })
         </script>     

     </body></html>