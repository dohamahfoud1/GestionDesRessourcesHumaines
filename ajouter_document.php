<?php
  require_once("identifier.php");
  require_once("connexion_bd.php");
  $doc=$_POST['doc'];
  $motif=$_POST['motif'];

  $idemp=$_SESSION['user']['Matricule'];
  
  $requete="INSERT INTO documents (type,motif,Matricule) VALUES ('$doc','$motif','$idemp')";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();

?>
 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "damande envoyé !",
          text: "votre demande à été envoyé avec succées! il doit être disponible le jeudi ",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "ajouter_document.php";
             })
         </script>     

     </body></html>