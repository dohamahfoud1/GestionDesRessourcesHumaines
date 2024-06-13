<?php
   try{
       $pdo= new PDO ("mysql:host=localhost;dbname=ressources_humaines","root","");
   }catch(Exception $e){
       die('Erreur de connexion :'.$e->getMessage());
   }
?>