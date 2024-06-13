<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $id=$_POST['id'];
  $titre=$_POST['titre'];
  $description=$_POST['t1'];


 
  $requete="update annoncement set titre=?,description=? where idannonce=?";
  $params=array($titre,$description,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  header('location:annoncements_rh.php');

?>
<html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "les informations seront modifiés ",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "annoncements_rh.php";
             })
         </script>     

     </body></html>