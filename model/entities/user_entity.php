<?php


//fonction pour se connecter à l'interface d'administration
function getUserByEmailMotDePasse(string $email, string $password) {
    global $connection;

    $query ="
    SELECT *
    FROM user
    WHERE email = :email
    AND password = SHA1(:password )
      
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();


}

function insertUser(string $name, string $surname, string $email, string $password){
    global $connection;

    $query ="
    INSERT INTO user (email, password, name, surname,admin) 
    VALUES (:email, SHA1(:mot_de_passe), :nom, :surname, 0)
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $password);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":surname", $surname);
    $stmt->execute();

}
