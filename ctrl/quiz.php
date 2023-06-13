<?php

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['utilisateur_id'])) {
    header("Location: login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

require '../lib/quiz.php';

$questions = getQuestionsRandomly(5);

// $questions = getQuestionAndAnswer($limit);
// $limit = 5; // Nombre de questions avec leurs propositions liées à récupérer aléatoirement



// var_dump($numbers);

include '../view/quiz-view.php';