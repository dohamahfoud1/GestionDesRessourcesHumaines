<?php
 require_once("identifier.php");
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">

    

   
      <!--profile-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">-->

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
    </style>
 <link href="navbar-top.css" rel="stylesheet">
    
  </head>
  <body class="bg-light">
    <?php include('Menu_emp.php');?>
    <br>
  <div class="container">
       <form class="" id="" name="" method="post" action="modifierinfoemployes.php" >
     	<div class="row d-flex justify-content-center" style="margin-top:-60px;">
            <div class="col-md-10 mt-5 pt-5">
             	<div class="row z-depth-3" >
                 	<div class="col-sm-4  rounded-left" style="color:green; background-color: #1a6499;">
        		        <div class="card-block text-center text-white"style="margin-top:8%;" >
                            <img style="width:110px;height:110px;border-radius:500px;margin-top:5px;" src="images/<?php echo $_SESSION['user']['photo'];?>"/>
                    		<h2 class="font-weight-bold mt-4"><?phpecho $_SESSION['user']['prenom'];?>&nbsp;<?php echo $_SESSION['user']['nom'];?></h2>
                    		<p><?php echo $_SESSION['user']['poste'];?></p><i class="far fa-edit fa-2x mb-4"></i>
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h3 class="mt-3 text-center">Information</h3>
                    	<hr class="bg-primary mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email:</p>
                           		<h6 class=" text-muted"><?php echo $_SESSION['user']['email'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Téléphone:</p>
                           		<h6 class="text-muted"><?php echo $_SESSION['user']['telephone'];?></h6>
                        	</div>
                    	</div>
                    		<h4 class="mt-3">POSTE</h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Département</p>
                          	  	<h6 class="text-muted"><?php echo $_SESSION['user']['departement'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Fonction</p>
                            	<h6 class="text-muted"><?php echo $_SESSION['user']['poste'];?></h6>
                        	</div>
                    	</div>
                	   	<hr class="bg-primary">
                	    <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <input type="submit" style="background-color:#A9A9A9;color:white;border-radius: 10px;" value="modifier mes informations">
	               		</ul>  
              		</div>
             	</div>
            </div>
        </div>
      </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
