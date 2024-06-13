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
}

.registration-form form{
    background-color: #fff;
   width:100%;
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
 <?php include('Menu_rh.php');?>
 <div class="container">
        <div class="registration-form" >
        <form id="" name="" method="post"  enctype="multipart/form-data" action="ajoutFicheSalarie.php" >
    <div class="row" >
        <div class="col-md-6" >
           <div class="row">
            <div class="container-fluid ">  
                    <img src="logoprofile.jpg" style="width: 10%; text-align: center; margin-left: 40%;margin-top: -5%;margin-bottom: 3%;" alt="CoolBrand">                
            </div>
           </div>
           <div class="row" style="">
           <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="matricule" class="form-control item" id="matricule" maxlength="4" placeholder="Matricule">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control item" id="nom" placeholder="Nom">
                    </div>
                </div>
        </div>
            <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="prenom" class="form-control item" id="prenom" placeholder="Prénom">
                    </div>
                </div>
                <div class="col-md-6" >
                <div class="form-group">
                        <input type="email" name="email" class="form-control item" id="email" placeholder="Email">
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" id="cin" name="cin" class="form-control item" placeholder="CIN" value="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="date" id="date" name="date" class="form-control item" placeholder="Date de naissance" value="" />
                </div>
            </div>
    </div>
    <div class="row">
        
            <div class="form-group">
                <input type="text" id="adresse" name="adresse" class="form-control item" placeholder="Adresse" value="" />
            </div>

</div>
<div class="row" style="margin-top:-3%;">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" name="ville" class="form-control item" id="ville" placeholder="Ville">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" name="pays" class="form-control item" id="pays" placeholder="Pays">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="genre" value="Femme">
        <label class="form-check-label" for="inlineRadio1">Femme</label>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="genre" value="Homme">
        <label class="form-check-label" for="inlineRadio2">Homme</label>
      </div>
      </div>
</div>


<div class="row" style="margin-bottom: 3%;margin-top:2%">
    <h6 class="text-muted">Situation Familiale</h6>
    <div class="col-md-6">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="situation" id="situation" value="Célibataire">
            <label class="form-check-label" for="inlineRadio1">Célibataire</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="situation" id="situation" onclick="afficherChamp();"  value="Marié(e)">
            <label class="form-check-label" for="inlineRadio2">Marié(e)</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="situation" id="situation" onclick="afficherChamp();" value="Divorcé(e)">
            <label class="form-check-label" for="inlineRadio1">Divorcé(e)</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="situation" id="situation" onclick="afficherChamp();" value="Veuf(ve)">
            <label class="form-check-label" for="inlineRadio2">Veuf(ve)</label>
          </div>
        </div>

</div>
<div class="row">
        <div class="form-group" id="champFacultatif" style="display:none;">
            <input type="text" name="enfant" class="form-control item" id="enfant" placeholder="Nombre d'enfant">
        </div>
</div>
        </div>
        
    <div class="col-md-6">
        <div class="row">
            <div class="container-fluid ">  
                    <img src="privacy.png" style="width: 10%; text-align: center; margin-left: 40%;margin-top: -5%;margin-bottom: 3%;" alt="CoolBrand">                
            </div>
           </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" id="cnss" name="cnss" class="form-control item" placeholder="Numéro CNSS" value="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select id="modepaiment" name="modepaiment" class="form-select ch-vide  item ">
                <option selected="selected">Mode de paiment</option>
                <option>Espèce</option>
                <option>Virement</option>
                   </select>
        
        </div>    
            </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="int" id="numcompte" name="numcompte" class="form-control item" placeholder="Numéro de compte" value="" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" id="affectation" name="affectation" class="form-control item" placeholder="Société" value="" />
            </div>
        </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" id="Salaire" name="Salaire" class="form-control item" placeholder="Salaire" value="" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <select id="typepaiment" name="typepaiment" class="form-select ch-vide  item ">
        <option selected="selected">Type de paiment</option>
        <option>Horaire/Mensuel</option>
                <option>Horaire</option>  
                <option>Mensuel</option>
           </select>

</div>    
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <select id="fonction" name="fonction" class="form-select ch-vide  item ">
        <option selected="selected">Fonction</option>
        <option>Achat</option>
        <option>Surveillance/Sécurité</option>
        <option>Assistant/Ventes/Accueil</option>
        <option>Assistant(e) / Secrétaire de direction</option>
        <option>BTP - Gros/Second Oeuvre</option>
        <option>Bureau etudes/BTP archit/conception</option>
        <option>Chaufeur/Livreur/Coursier</option>
        <option>Commercial/Technico-Commercial</option>
        <option>Commercial particuliers (B2C)</option>
        <option>Commercial professionnels (B2B)</option>
        <option>Commercial IT/Agence Com</option>
        <option>Commercial Vendeur magasin/Showroom</option>
        <option>Comptabilite/Gestion/Audit/Finance</option>
        <option>Cuisinier/Serveur(se)/Femme ménage/Nounou</option>
        <option>Manager Restauration</option>
        <option>Direction/Resp. Co. et Centre de Profit</option>
        <option>Import/Export</option>
        <option>Informatique - Développement Hardware</option>
        <option>Informatique - Développement</option>
        <option>Informatique - Webdesign/Infographie</option>
        <option>Informatique - Systèmes d'Information</option>
        <option>Informatique - Systèmes/Réseaux</option>
        <option>Ingénierie - Agro/Agri</option>
        <option>Ingénierie - Chimie/Pharmacie/Bio</option>
        <option>Ingénierie - Electro-tech./Automat</option>
        <option>Ingénierie - Mécanique/Aéron</option>
        <option>Ingénierie - Telecoms/Electronique</option>
        <option>Mécanicien Automobile</option>
        <option>Ingénieur Automobile</option>
        <option>Juridique/Droit</option>
        <option>Logistique/Métiers du Transport</option>
        <option>Marketing/Communication</option>
        <option>Négociation/Gestion immobilière</option>
        <option>Production - Gestion/Maintenance</option>
        <option>Production - Opérateur/Manoeuvre</option>
        <option>Qualité/Hygiène/Sécurité/Environnement</option>
        <option>RH/Personnel/Formation</option>
        <option>Santé/Social</option>
        <option>SAV/Hotline/Téléconseiller</option>
           </select>
</div>    
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" id="mission" name="mission" class="form-control item" placeholder="Mission" value="" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="date" id="datedebut" name="datedebut" class="form-control item" placeholder="Date début" value="" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input type="date" id="datefin" name="datefin" class="form-control item" placeholder="Date Fin" value="" />
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group "  >
        <input style="background-color: rgb(9, 67, 137); " type="submit" class="btn btn-block create-account" value="Enregistrer">
      </div>
</div>

    </div>
    
    </div>
   
</form>

    </div>
</div>
<script>
    function afficherChamp() {
  var champFacultatif = document.getElementById("champFacultatif");
  champFacultatif.style.display = "block";
}
</script>
</body>
</html>