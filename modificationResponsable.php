<?php 
  require_once("identifier.php");
  require_once("connexion_bd.php");
  $id=$_POST['id']; 
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $departement=$_POST['departement'];
  $poste=$_POST['poste'];
 
 
  $requete="update rh set email=?,nom=?,prenom=?,poste=?,departement=? where idrh=?";
  $params=array($email,$nom,$prenom,$poste,$departement,$id);
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
          text: "les informations de ce responsable seront modifiés après la déconnexion!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "tousResponsables.php";
             })
         </script>     

     </body></html>