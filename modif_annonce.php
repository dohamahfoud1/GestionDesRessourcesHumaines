<?php
 require_once("identifier.php");
 require_once("connexion_bd.php");
 $idannonce=isset($_GET['idannonce'])?$_GET['idannonce']:0;
 $requete="select *from annonce_public where idannonce=$idannonce";
 $resultat=$pdo->query($requete);
 $annoncement=$resultat->fetch();

 $titreA=$annoncement['titre'];
 $resumeA=$annoncement['résumé'];
 $metierA=$annoncement['métier'];
 $regionA=$annoncement['region'];
 $descriptionA=$annoncement['description'];

?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>modifier annonce</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
       tinymce.init({
        selector: '#mytextarea'
      });
    </script>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .inscform{
            background: white;
            width: 55%;
            height: 100%;
            padding: 25px 25px 25px 25px;
            border-radius: 20px;
            margin-left: 300px;
          }
 
          .insc{
           text-align: right;
           margin-top: -30px;
          }
    </style>
 <link href="navbar-top.css" rel="stylesheet">

  </head>
  <body>
    <?php include('Menu_rh.php');?>
    
    <div class="container" style="margin-top:8%;">
    
  <div class="inscform">
      
     <form class="" id="" name="" method="post" action="modification_annonce.php">
         
      <div class="row">
         
         <div class="form-group col-12"> 
            <label>Titre</label>
            <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $idannonce?>">
            <input type="text" name="titre" class="form-control" placeholder="Titre" id="titre" value="<?php echo $titreA?>">     
         </div>
     </div>
     <div class="row">
         
         <div class="form-group col-12"> 
            <label>Metier</label>
            <input type="text" name="metier" class="form-control" placeholder="metier" id="metier" value="<?php echo $metierA?>">     
         </div>
     </div>
     <div class="row">
         
         <div class="form-group col-12"> 
            <label>Region</label>
            <input type="text" name="region" class="form-control" placeholder="region" id="region" value="<?php echo $regionA?>">     
         </div>
     </div>
     <div class="row">
         
         <div class="form-group col-12"> 
            <label>Résumée</label>
            <input type="text" name="resume" class="form-control" placeholder="Résumée" id="resume" value="<?php echo $resumeA?>">     
         </div>
     </div>
    <div class="row">
         <div class="form-group col-12">
         <label>description</label>
         <textarea id="mytextarea" name="t1" rows="6" cols="35" id="t1" ><?php echo $descriptionA?></textarea>
         </div>
      </div>
      <div class="row">
         
  
     
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" value="modifier">
    </div>    
    </div>    
     </form> 
  </div>      
  
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
