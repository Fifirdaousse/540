<?php

require '../lib/db.php';

//Générer 6 nombres aléatoires et les stock dans un tableau
function multyRandomNumber($min, $max){
    $arr = [];

    for ($i = 0 ; $i <= 5; $i++){
        $randomNumber = rand($min, $max);
        $arr[] = $randomNumber;
    }

    return $arr;
}

//Requete SQL pour récuperer les questions

function getQuestion($numbers){

    $num1 = 1;
    $num2 = 2;
    //Prépare la requête
    $query = 'SELECT *';
    $query .= 'FROM question';
    $query .= 'WHERE id IN(:numbers)';
    $stmt = getPDO()->prepare($query);
    $stmt->bindParam(':numbers', $num1);
    $stmt->bindParam(':numbers', $num2);

    // Exécute la requête
    $successOrFailure = $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//Transforme le tableau en string
$numbers = implode(',', multyRandomNumber(1, 30));

getQuestion([1,2]);















function getAnswer(){

    //Prépare la requête
    $query = 'SELECT count(proposition.idQuestion)';
    $query .= 'FROM proposition';
    $query .= 'JOIN question ON question.id = proposition.idQuestion';
    $query .= 'WHERE proposition.estBonneReponse = 1';
    $stmt = getPDO()->prepare($query);

    // Exécute la requête
    $successOrFailure = $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}