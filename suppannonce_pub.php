<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexion_bd.php");

  $id=$_GET['idannonce'];
  $requete="delete from annonce_public where idannonce=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();
  }
else {
     header('location:annonce_pub.php');
}

?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "l'annonce a été supprimé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "annonce_public.php";
             })
         </script>     

     </body></html>