<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexion_bd.php");

  $id=$_GET['idrh'];
  $requete="delete from rh where idrh=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();
  

  }
?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "le responsable a été supprimée avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "tousResponsables.php";
             })
         </script>     

     </body></html>