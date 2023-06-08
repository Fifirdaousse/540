<?php

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['utilisateur_id'])) {
    header("Location: login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

require '../lib/quiz.php';



// var_dump($numbers);

include '../view/quiz-view.php';