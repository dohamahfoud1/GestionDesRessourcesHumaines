<?php

require_once("connexion_bd.php");
  
  $matricule=$_POST['matricule'];
  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $genre=$_POST['genre'];
  $cin=$_POST['cin'];
  $date=$_POST['date'];
  $adresse=$_POST['adresse'];
  $ville=$_POST['ville'];
  $pays=$_POST['pays'];
  $situation=$_POST['situation'];
  $enfant=$_POST['enfant'];
  $cnss=$_POST['cnss'];
  $modepaiment=$_POST['modepaiment'];
  $numcompte=$_POST['numcompte'];
  $affectation=$_POST['affectation'];
  $Salaire=$_POST['Salaire'];
  $typepaiment=$_POST['typepaiment'];
  $fonction=$_POST['fonction'];
  $mission=$_POST['mission'];
  $datedebut=$_POST['datedebut'];
  $datefin=$_POST['datefin'];
  $email=$_POST['email'];
     
      $requete="INSERT INTO fiche_salarie(matricule,nom,prenom,email,genre,cin,dateNaissance,adresse,ville,pays,situation,nombreEnfant,cnss,modepaiment,numcompte,societe,salaire,typepaiment,fonction,mission,datedebut,datefin) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $params=array($matricule,$nom,$prenom,$email,$genre,$cin,$date,$adresse,$ville,$pays,$situation,$enfant,$cnss,$modepaiment,$numcompte,$affectation,$Salaire,$typepaiment,$fonction,$mission,$datedebut,$datefin);
      $resultat=$pdo->prepare($requete);
      $resultat->execute($params);?>
      <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "Ajouter avec success !",
          text: " Fiche salarié ajouter avec success !!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "salarie.php";
             })
         </script>     

     </body></html>