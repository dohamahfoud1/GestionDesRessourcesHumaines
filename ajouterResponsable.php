<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .registration-form{
	padding: 80px 0;
    margin-top:-6%;
}

.registration-form form{
    background-color: #fff;
   width:60%;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
	text-align: center;
 
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
 
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}

    </style>
</head>
<body>
 <div class="container">
        <div class="registration-form" >
        <form id="" name="" method="post"  enctype="multipart/form-data" action="ajoutRh.php" >
    <div class="row" >
    <div class="container-fluid ">  
                    <img src="rh.png" style="width: 20%; text-align: center; margin-left: 40%;margin-top: -5%;margin-bottom: 3%;" alt="CoolBrand">                
            </div>
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <input type="text" name="nom" class="form-control item" id="nom"  placeholder="Nom">
                    </div>
                </div>
               <div class="col-md-6">
               <div class="form-group">
                        <input type="text" name="prenom" class="form-control item" id="prenom"  placeholder="Prenom">
                    </div>
               </div>


            </div>
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <input type="text" name="poste" class="form-control item" id="poste"  placeholder="Poste">
                    </div>
                </div>
               <div class="col-md-6">
               <div class="form-group">
                        <input type="text" name="departement" class="form-control item" id="departement"  placeholder="Département">
                    </div>
               </div>


            </div>
   
                    <div class="form-group">
                        <input type="email" name="email" class="form-control item" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="motdepasse" class="form-control item" id="motdepasse" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <input type="password" name="motdepasse" class="form-control item" id="motdepasse"  placeholder="Confirmation de mot de passe">
                    </div>
                    <div class="form-group "  >
        <input style="background-color: rgb(9, 67, 137);" type="submit" class="btn btn-block create-account" value="Enregistrer">
      </div>
    </div>
   
</form>

    </div>
</div>

</body>
</html>