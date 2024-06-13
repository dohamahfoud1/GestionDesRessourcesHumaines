<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Interfaces</title>
    <style>
      .choix{
  width: 100%;
  border: none;
  font-size: 2rem;
  font-weight: bold;
  padding: 1rem;
  font-family: Arial black;
  text-decoration: none;
  color: #0d0d0d;
}
.wrapper-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, 20rem);
  justify-content: center;     
  width: 100%; 

}

.profile-img{
width:17rem;    
margin-bottom: 4%;   
color: black;            
}
.banner-img {
  position: absolute;
  height: 10rem;
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  overflow: hidden;
  box-shadow: 0px 2px 8px 0px black;
  background-color: #b8c1c5;
  text-align: center;
  border-radius: 1rem;
  position: relative;
  margin: 0.1em;;
  padding: 17%;
  padding-right: 6%;
  padding-left: 1%;
  margin-top: 25%;
  width: 100%;
}
.container:hover{
  background-color: #1a6499; ;
} 

.choix:hover{
  color:white;
}

    </style>
</head>
<body>
    <div class="wrapper-grid" style="justify-content: space-evenly ;" >
        <div class="container">
          <div class='banner-img'></div>
         <a href="employé.php" class="choix"> <img src="employé.png" alt='employé' class="profile-img">Employé</a>    
    
        </div>
        <div class="container">
          <div class='banner-img'></div>
          <a href="rh.php" class="choix"><img src="rh.png" alt='Ressource humain' class="profile-img">RH</a>
        </div>
        </div>
</body>
</html>