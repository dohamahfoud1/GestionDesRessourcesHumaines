<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexion_bd.php");

  $id=$_GET['iddoc'];
  $requete="delete from documents where iddoc=$id";
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
          text: "le document a été supprimé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "documents.php";
             })
         </script>     

     </body></html>