<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $id=$_POST['id'];
  $titre=$_POST['titre'];
  $description=$_POST['t1'];
  $resume=$_POST['resume'];
  $region=$_POST['region'];
  $metier=$_POST['metier'];


 
  $requete="update annonce_public set titre=?,description=?,résumé=?,region=?,métier=? where idannonce=?";
  $params=array($titre,$description,$resume,$region,$metier,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);

?>
<html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "les informations seront modifiés !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "annonce_public.php";
             })
         </script>     

     </body></html>
