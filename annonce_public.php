<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $requete="select *from annonce_public";
  $resultatR=$pdo->query($requete);
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>annoncements</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    
      
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
      .bouttonannonce{
         margin: 12px 470px;
      }
      .lignecolor{
        background: white;
        text-align: center;
    }
      .tablecolor{
        background: #007ba1;
        color: white;
        font-weight: bold;
        font-family:serif;
        padding: 12px 15px;
        text-align: center;
    }
      .tablecontent{
        border-radius: 10px 10px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
        width: 100%;
        height: 100%;
    }
    </style>
 <link href="navbar-top.css" rel="stylesheet">

  </head>
  <body>
    <?php include('Menu_rh.php');?>
    <br>
  <form method="post" action="ajouterannonce_pub.php" class="form"  style="margin-top:10%;" >
  <div class="modal fade" id="ajoutannonce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une annonce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="row">
         
         <div class="form-group col-12"> 
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" id="titre">     
         </div>
         <div class="form-group col-12"> 
            <label>Date de publication</label>
            <input type="date" name="datepub" class="form-control" placeholder="Date de publication" id="datepub">     
         </div>
         <div class="form-group col-12"> 
            <label>résumé</label>
            <input type="text" name="resume" class="form-control" placeholder="résumé" id="resume">     
         </div>
         <div class="form-group col-12">
            <label>Région</label>
            <select id="region" name="region" class="form-select ch-vide">
        <option selected="selected">Région</option>
        <option>Agadir</option>
        <option>Béni Mellal-Khénifra</option>
        <option>Casablanca-Mohammedia</option>
        <option>Dakhla</option>
        <option>Errachidia</option>
        <option>Fès</option>
        <option>Laâyoune</option>
        <option>Marrakech-Safi</option>
        <option>Meknès</option>
        <option>Oujda</option>
        <option>Rabat-Salé-Kénitra</option>
        <option>Settat</option>
        <option>Tanger-Tétouan-Al Hoceïma</option>
        <option>International</option>
           </select>

</div>
<div class="form-group col-12">
            <label>Métier</label>
            <select id="metier" name="metier" class="form-select ch-vide">
        <option selected="selected">Métier</option>
        <option>Achats</option>
        <option>Commercial,vente</option>
        <option>Gestion, comptabilité, finance</option>
        <option>Informatique, nouvelles technologies</option>
        <option>Juridique</option>
        <option>Management, direction générale</option>
        <option>Marketing, communication</option>
        <option>Métiers de la santé et du social</option>
        <option>Métiers des services</option>
        <option>Métiers du BTP</option>
        <option>Production, maintenance, qualité</option>
        <option>R&D, gestion de projets</option>
        <option>RH, formation</option>
        <option>Secrétariat, assistanat</option>
        <option>Télémarketing, téléassistance</option>
        <option>Tourisme, hôtellerie, restauration</option>
        <option>Transport, logistique</option>
           </select>

</div>
     </div>
    <div class="row">
         <div class="form-group col-12">
         <label>description</label>
         <textarea id="mytextarea" name="t1" rows="6" cols="35" id="t1"></textarea>
         </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">poster</button>
      </div>
    </div>
  </div>
</div>
      </form>
  <div class="container">
       
  <div class="bouttonannonce">
  <div>
    <button type="button" class="btn " data-bs-toggle="modal" style="background-color: #007ba1;color:white;" data-bs-target="#ajoutannonce">
  Ajouter une annonce
</button>
      </div>
    </div>
       <div class="panel panel-success margetop">


    <div class="panel-body">
        <table class=tablecontent>
        <thead class=tablecolor>
         <tr>
            <th>TITRE</th>
            <th>CONTENU</th>
            <th>METIER</th>
            <th>REGION</th>
            <th>DATE DE PUB</th>
            <th>ACTION</th>
            </tr>
        
        </thead>
        <tbody>
            <?php while($annoncement=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <td width="15%" valign="top"><?php echo $annoncement['titre'] ?></td>
            <td width="25%"><?php echo $annoncement['résumé'] ?></td>
            <td width="15%" valign="top"><?php echo $annoncement['métier'] ?></td>
            <td width="15%"><?php echo $annoncement['region'] ?></td>
            <td width="20%"><?php echo $annoncement['date_pub'] ?></td>
            <td>
            <a href="modif_annonce.php?idannonce=<?php echo $annoncement['idannonce']?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a onclick="return confirm('Etes vous sûr de vouloir supprimer l\'annonce')" href="suppannonce_pub.php?idannonce=<?php echo $annoncement['idannonce']?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
