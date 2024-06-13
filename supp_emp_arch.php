<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexion_bd.php");

  $id=$_GET['idemp'];
  $requete="delete from employesarchiver where idsalarie=$id";
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
          text: "l'employé a été supprimé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "archives_emp.php";
             })
         </script>     

     </body></html>