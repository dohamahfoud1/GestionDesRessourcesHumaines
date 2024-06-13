<?php

require_once("identifier.php");
require_once("connexion_bd.php");

if (isset($_POST['matricule']) && isset($_POST['mois']) && isset($_POST['annee'])) {
    $matricule = $_POST['matricule'];
    $mois = $_POST['mois'];
    $annee = $_POST['annee'];

    // Requête SQL pour récupérer les autres champs de l'utilisateur
    $sql = "SELECT * FROM fiche_salarie WHERE matricule='$matricule'";
    $result = $pdo->query($sql);

 
        // Requête SQL pour récupérer les autres informations de l'utilisateur
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':matricule', $matricule);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            // Récupération des données de l'utilisateur
            $matricule=$row['matricule'];
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $adresse = $row['adresse'];
            $ville = $row['ville'];
            $salaire = $row['salaire'];

        }
    }
?>