<?php

require '../lib/db.php';

//Générer 6 nombres aléatoires et les stock dans un tableau
// function multyRandomNumber($min, $max){
//     $arr = [];

//     for ($i = 0 ; $i <= 5; $i++){
//         $randomNumber = rand($min, $max);
//         $arr[] = $randomNumber;
//     }

//     return $arr;
// }

// //Requete SQL pour récuperer les questions

// function getQuestion($numbers){

//     $num1 = 1;
//     $num2 = 2;
//     //Prépare la requête
//     $query = 'SELECT *';
//     $query .= 'FROM question';
//     $query .= 'WHERE id IN(' . $numbers . ')';
//     $stmt = getPDO()->prepare($query);
//     $stmt->bindParam(':numbers', $num1);
//     $stmt->bindParam(':numbers', $num2);

//     // Exécute la requête
//     $successOrFailure = $stmt->execute();

//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }


// // ------------------------------------

// //Transforme le tableau en string
// $numbers = implode(',', multyRandomNumber(1, 30));

// getQuestion([1,2]);


// static function listArticle($ids) {

//     self::log()->info(__FUNCTION__, ['ids' => $ids]);

//     $idsAsStr = implode(',',$ids);
//     self::log()->info(__FUNCTION__, ['idsAsStr' => $idsAsStr]);

//     // Prépare la requête
//     $query = 'SELECT ART.id, ART.idUser, ART.title, ART.description, ART.text, ART.picture, ART.createdAt';
//     $query .= ' FROM article ART';
//     $query .= ' WHERE ART.id IN ('. $idsAsStr . ')';
//     $query .= ' ORDER BY ART.createdAt DESC';
//     self::log()->info(__FUNCTION__, ['query' => $query]);
//     $stmt = LibDb::getPDO()->prepare($query);
//     //$stmt->bindParam(':ids', $idsAsStr);

//     // Exécute la requête
//     $successOrFailure = $stmt->execute();
//     self::log()->info(__FUNCTION__, ['Success (1) or Failure (0) ?' => $successOrFailure]);

//     $listArticle = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     self::log()->info(__FUNCTION__, ['listArticle' => $listArticle]);

//     return $listArticle;
// }


// // OR

//    static function listArticle($ids) {

//         self::log()->info(__FUNCTION__, ['ids' => $ids]);

//         $idsAsQuestionMark = implode(',', array_fill(0, count($ids), '?'));
//         self::log()->info(__FUNCTION__, ['idsAsQuestionMark' => $idsAsQuestionMark]);

//         // Prépare la requête
//         $query = 'SELECT ART.id, ART.idUser, ART.title, ART.description, ART.text, ART.picture, ART.createdAt';
//         $query .= ' FROM article ART';
//         $query .= ' WHERE ART.id IN ('. $idsAsQuestionMark . ')';
//         $query .= ' ORDER BY ART.createdAt DESC';
//         self::log()->info(__FUNCTION__, ['query' => $query]);
//         $stmt = LibDb::getPDO()->prepare($query);

//         // Exécute la requête
//         $successOrFailure = $stmt->execute($ids);
//         self::log()->info(__FUNCTION__, ['Success (1) or Failure (0) ?' => $successOrFailure]);

//         $listArticle = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         self::log()->info(__FUNCTION__, ['listArticle' => $listArticle]);

//         return $listArticle;
//     }





// // ------------------------------------





// function getAnswer(){

//     //Prépare la requête
//     $query = 'SELECT count(proposition.idQuestion)';
//     $query .= 'FROM proposition';
//     $query .= 'JOIN question ON question.id = proposition.idQuestion';
//     $query .= 'WHERE proposition.estBonneReponse = 1';
//     $stmt = getPDO()->prepare($query);

//     // Exécute la requête
//     $successOrFailure = $stmt->execute();

//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }


//////////////////////////////////////

// OU
function getQuestionsRandomly($limit) {
    $query = 'SELECT * FROM question ORDER BY RAND() LIMIT :limit';
    $stmt = getPDO()->prepare($query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//////////////////////////////////////

// function getQuestionAndAnswer($limit) {
//     $query = 'SELECT q.*, p.* FROM question AS q ';
//     $query .= 'JOIN proposition AS p ON q.id = p.idQuestion ';
//     $query .= 'ORDER BY RAND() LIMIT :limit';

//     $stmt = getPDO()->prepare($query);
//     $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
//     $stmt->execute();

//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     $questions = [];
    
//     foreach ($results as $row) {
//         $questionId = $row['id'];
//         if (!isset($questions[$questionId])) {
//             $questions[$questionId] = [
//                 'id' => $row['id'],
//                 'question_text' => $row['question_text'],
//                 'propositions' => []
//             ];
//         }

//         $questions[$questionId]['propositions'][] = [
//             'proposition_id' => $row['proposition_id'],
//             'proposition_text' => $row['proposition_text'],
//             // Ajoutez d'autres colonnes de la table "proposition" si nécessaire
//         ];
//     }

//     return array_values($questions);
// }

