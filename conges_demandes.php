<?php
   require_once("identifier.php");
  require_once("connexion_bd.php");
  $requete="select *from congesdemandes";
  $resultatR=$pdo->query($requete);
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>les congés demandés</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">

    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
      
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
      .lignecolor{
        background: white;
        text-align: center;
    }
      .tablecolor{
        background:  #007ba1;
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
  <div class="container" style="margin-top:10%;">
       
       <div class="panel panel-success margetop">
    <div class="panel-body">
        <table class=tablecontent>
        <thead class=tablecolor>
         <tr>
            <th>NOM</th>
            <th>DATE DE DEBUT</th>
            <th>DATE DE FIN</th>
            <th>PERIODE</th>
            <th>TYPE DE CONGE</th>
            <th>ACTION</th>
            </tr>
        
        </thead>
        <tbody>
            <?php while($congesdemandes=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <td ><?php echo $congesdemandes['nom'] ?></td>
            <td ><?php echo $congesdemandes['datedebut'] ?></td>
            <td ><?php echo $congesdemandes['datefin'] ?></td>
            <td ><?php $nbjours = round((strtotime($congesdemandes['datefin']) - strtotime($congesdemandes['datedebut']))/(60*60*24));
                echo $nbjours .' jours';?></td>
            <td ><?php echo $congesdemandes['typeconge'] ?></td>
            <td>
            <a href="conge_accepter.php?idemp=<?php echo $congesdemandes['idemp']?>"> <span class="material-icons">done</span></a>
            <a href="conge_refuser.php?idemp=<?php echo $congesdemandes['idemp']?>"> <span class="material-icons">close</span></a> 
            </td>
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
