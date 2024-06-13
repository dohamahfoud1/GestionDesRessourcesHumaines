<?php
 require_once("identifier.php");
 require_once("connexion_bd.php");
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>modifier mes informations</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
   
    

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
      .container img{
              width: 120px;
              height: 120px;
              margin-top: -30px;
              margin-bottom: 30px;
              margin-right: 100px;
              margin-left: 550px;
          }
          h1{
              text-align: center;
              margin-left: 100px;
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
    
    <div class="container">
    
  <div class="inscform">
      
     <form class="" id="" name="" method="post" action="modification_info_rh.php">
      <div class="row">
      <div class="form-group col-12">
            <label>Email</label>
            <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $_SESSION['user']['idrh'];?>">
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['user']['email'];?>">     
         </div>
      </div>
     <div class="row">
      <div class="form-group col-12">
              <label>Département</label>
            <input type="text" name="dep" class="form-control" placeholder="Département" value="<?php echo $_SESSION['user']['departement'];?>">   
         </div>
  
         </div>
         <div class="row">
         
            <div class="form-group col-12">
             <label>Poste</label>
            <input type="text" name="poste" class="form-control" placeholder="Poste" value="<?php echo $_SESSION['user']['poste'];?>">   
         </div>
         </div>
         <div class="row">
      <div class="form-group col-12">
              <label>Mot de passe</label>
            <input type="password" name="mt" class="form-control" placeholder="mot de passe" value="<?php echo $_SESSION['user']['motdepasse'];?>">   
         </div>
         </div>
     
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn bg-dark text-light" value="modifier">
    </div>    
    </div>    
     </form> 
  </div>      
  
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>