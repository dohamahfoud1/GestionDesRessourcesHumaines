<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $nomE=isset($_GET['nomE'])?$_GET['nomE']:"";
  $requete="select * from supplemantaire where matricule like '%$nomE%' or date like '%$nomE%'";
  $resultatR=$pdo->query($requete);


  ?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Gestion supplementaire</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    
      
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   
    
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
    <?php include('menu_Facturation.php');?>
    <br>
  <form method="post" action="ajouterSupp.php" class="form"  style="margin-top:10%;" >
  <div class="modal fade" id="ajoutannonce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="row">
         
         <div class="form-group col-12"> 
            <label>Matricule</label>
            <input type="int" name="matricule" class="form-control" maxlength="4" placeholder="Matricule" id="matricule">     
         </div>
     </div>
    <div class="row">
         <div class="form-group col-12">
         <label>Date</label>
         <input type="date" id="date" name="date" class="form-control"></input>
         </div>
      </div>
      <div class="row" >
      <label>Jour férier</label>
    <div class="form-group col-12">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ferier" id="ferier" value="oui">
        <label class="form-check-label" for="inlineRadio1">Oui</label>
      </div>
      </div>
      <div class="form-group ">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ferier" id="ferier" value="non">
        <label class="form-check-label" for="inlineRadio2">Non</label>
      </div>
      </div>
</div>
<div class="row">
         
         <div class="form-group col-12"> 
            <label>Coef. jour férier</label>
            <input type="float" name="coefferier" class="form-control" placeholder="Coef.Jour férier" id="coefferier">     
         </div>
     </div>
     <div class="row">
         
         <div class="form-group col-12"> 
            <label>Heures supp</label>
            <input type="float" name="supp" class="form-control" placeholder="Heures supp" id="supp">     
         </div>
     </div>
     <div class="row">
         
         <div class="form-group col-12"> 
            <label>Coef.Heures supp</label>
            <input type="float" name="coefsupp" class="form-control" placeholder="Coef.Heures supp" id="coefsupp">     
         </div>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">insérer</button>
      </div>
    </div>
  </div>
</div>
</div>
      </form>
  <div class="container">
  <div class="row"  style="margin-top:-5%;">
      <div class="col-md-6">
        <form method="get" action="supplemantaire.php" >
  <div class="input-group  " style="margin-bottom:10%;">
  <input type="text" name="nomE" class="form-control rounded" placeholder="chercher "  />
  <button type="submit" id="submitBtn" style="background:#007ba1;color:white;" class="btn ">chercher</button>
  </div>  
  </form>
</div>
<div class="col-md-6">
<button type="button" style="float:right; width:200px;background:#007ba1;" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajoutannonce">
  Ajouter 
</button>
</div>
</div>
       <div class="panel panel-success margetop">
    <div class="panel-body">
        <table class=tablecontent>
        <thead class=tablecolor>
         <tr>
            <th>MATRICULE</th>
            <th>DATE</th>
            <th>JOUR FERIER</th>
            <th>PRIX JOUR FERIER</th>
            <th>HEURES SUPPLEMENTAIRES</th>
            <th>PRIX HEURES SUPPLEMENTAIRES</th>
            <th>ACTION</th>
            </tr>
        
        </thead>
        <tbody>
            <?php while($supplementaire=$resultatR->fetch()){  ?>
            <tr class=lignecolor>
            <td width="10%" valign="top"><?php echo $supplementaire['matricule'] ?></td>
            <td width="10%"><?php echo $supplementaire['date'] ?></td>
            <td width="10%"><?php echo $supplementaire['jourFerier'] ?></td>
            <td><?php echo $supplementaire['prixJourFerier'] ?></td>
            <td><?php echo $supplementaire['heuresSupp'] ?></td>
            <td><?php echo $supplementaire['prixHeuresSupp'] ?></td>
            <td>
            <a onclick="return confirm('Etes vous sûr de vouloir supprimer l\'annonce')" href="supp_annonce.php?idsupp=<?php echo $supplementaire['idsupp']?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
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
