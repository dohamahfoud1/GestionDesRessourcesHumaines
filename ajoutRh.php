<?php

require_once("connexion_bd.php");



  
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$poste=$_POST['poste'];
$departement=$_POST['departement'];
  $email=$_POST['email'];
  $motdepasse=$_POST['motdepasse'];

  
     
     $requete="INSERT INTO rh (nom,prenom,poste,departement,email,motdepasse) VALUES (?,?,?,?,?,?)";
      $params=array($nom,$prenom,$poste,$departement,$email,$motdepasse);
      $resultat=$pdo->prepare($requete);
      $resultat->execute($params);?>
      <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "  Félicitations,le compte est créé !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "ajouterResponsable.php";
             })
         </script>     

     </body></html>