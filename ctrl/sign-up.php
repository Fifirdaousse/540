<?php

require "../lib/user.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Effectuer la validation des données de l'article 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    
    signup($nom, $prenom, $email, $mdp);
    
    header("Location: ../index.php");
}
// Ajouter une condition si email deja utilisé

include "../view/sign-up.php";
