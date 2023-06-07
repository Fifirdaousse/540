<?php
require '../lib/db.php';

// A MODIF
function readAllUser()
{
    // Prépare la requête
    $query = 'SELECT USER.id, USER.nom, USER.prenom, USER.email, USER.motDePasse';
    $query .= ' FROM utilisateur AS USER';
    $query .= ' JOIN role AS R ON USER.idRole = R.id';
    $query .= ' LEFT JOIN article AS ART ON USER.id = ART.idUtilisateur';
    $query .= ' ORDER BY USER.nom';
    $stmt = getPDO()->prepare($query);

    // Exécute la requête
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


// S'incrire
function signup($nom, $prenom, $email, $mdp)
{
    // ID du rôle Membre
    $idRole = 20; 

    // Prépare la requête
    $query = 'INSERT INTO utilisateur (nom, prenom, email, motDePasse, idRole) VALUES';
    $query .= ' (:nom, :prenom, :email, :motDePasse, :idRole)';

    $stmt = getPDO()->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':motDePasse', $mdp);
    $stmt->bindParam(':idRole', $idRole); 
    
    // Exécute la requête
    $successOrFailure = $stmt->execute();

    return $successOrFailure;
}


// Créer un utilisateur
function createUser($nom, $prenom, $email, $mdp, $idRole)
{

    // Prépare la requête
    $query = 'INSERT INTO utilisateur (nom, prenom, email, motDePasse, idRole) VALUES';
    $query .= ' (:nom, :prenom, :email, :motDePasse, :idRole)';

    $stmt = getPDO()->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':motDePasse', $mdp);
    $stmt->bindParam(':idRole', $idRole); 
    
    // Exécute la requête
    $successOrFailure = $stmt->execute();

    return $successOrFailure;
}


/////////////////////////////:: A MODIF
// Supprime un utilisateur sans article
function deleteUser($id)
{
    // Prépare la requête
    $query = 'DELETE FROM utilisateur WHERE id = :id';
    $stmt = getPDO()->prepare($query);
    $stmt->bindParam(':id', $id);

    // Exécute la requête
    $successOrFailure = $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}