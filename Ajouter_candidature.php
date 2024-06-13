<?php

require_once("connexion_bd.php");

  $fichiercv=$_FILES['cv']['name'];

  $cvExt = explode('.',$fichiercv);
  $cvExtActu = strtolower(end($cvExt));
  $autoriser = array('pdf','PDF');

  

  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $date=$_POST['date'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
  $region=$_POST['region'];
  $situation=$_POST['situation'];
  $niveau=$_POST['niveau'];
  $metier=$_POST['metier'];
  
 if (in_array($cvExtActu,$autoriser)){
      move_uploaded_file($_FILES['cv']['tmp_name'],"fichier/".$_FILES['cv']['name']);
      $timestamp = time(); // Current timestamp
      $targetFileName = $nom . $prenom .'_' .  $metier . '_' . $niveau.$_FILES['cv']['name'];

      $requete="INSERT INTO candidats (prenom,nom,dateNaissance,email,region,situation,niveau,telephone,secteur,cv) VALUES (?,?,?,?,?,?,?,?,?,?)";
      $params=array($prenom,$nom,$date,$email,$region,$situation,$niveau,$telephone,$metier,$fichiercv);
      $resultat=$pdo->prepare($requete);
      $resultat->execute($params);?>
      <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: " Félicitations ! Merci d'avoir soumis votre candidature ..!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "formulaire.html";
             })
         </script>     

     </body></html>
 <?php }
else { ?>
     <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "warning",
          title: "Erreur !",
          text: "vous ne pouvez pas importer les fichiers de ce type, seuls les fichiers pdf sont autorisés !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "Acceuil.php";
             })
         </script>     

     </body></html>
 <?php } 
?>