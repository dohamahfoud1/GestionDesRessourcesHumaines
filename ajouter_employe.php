<?php

require_once("connexion_bd.php");



  
$matricule=$_POST['matricule'];
  $email=$_POST['email'];
  $motdepasse=$_POST['motdepasse'];

  
     
     $requete="INSERT INTO employes (matricule,email,motdepasse) VALUES (?,?,?)";
      $params=array($matricule,$email,$motdepasse);
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
            window.location = "creationcompte.php";
             })
         </script>     

     </body></html>