<?php 
  require_once("identifier.php");
  require_once("connexion_bd.php");
  $id=$_POST['id']; 
  $email=$_POST['email'];
  $date=$_POST['date'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $adresse=$_POST['adresse'];
  $mission=$_POST['mission'];
  $fonction=$_POST['fonction'];
 
  $requete="update fiche_salarie set email=?,dateNaissance=?,nom=?,prenom=?,adresse=?,mission=?,fonction=? where Matricule=?";
  $params=array($email,$date,$nom,$prenom,$adresse,$mission,$fonction,$id);
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
          text: "vos informations seront modifiés après la déconnexion!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "profile_emp.php";
             })
         </script>     

     </body></html>