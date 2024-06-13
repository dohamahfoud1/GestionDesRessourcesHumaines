<?php 
  require_once("identifier.php");
  require_once("connexion_bd.php");
  $id=$_POST['id']; 
  $email=$_POST['email'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $fonction=$_POST['fonction'];
 
  $requete="update fiche_salarie set email=?,nom=?,prenom=?,fonction=? where idsalarie=?";
  $params=array($email,$nom,$prenom,$fonction,$id);
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
          text: "les informations seront modifiés après la déconnexion!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "lister_employes.php";
             })
         </script>     

     </body></html>