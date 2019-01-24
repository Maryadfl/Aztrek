<?php

//pour générer les catégories
function insertCategorie(string $label) {
    global $connection;


    $query = "INSERT INTO  category (label) VALUES (:label)";


    //Prépare la requête SQL

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);

    //Execute la requête SQL
    $stmt->execute();


}

//fonction pour charger les modifications
function updateCategorie(int $id,string $label) {
    global $connection;


    $query = "UPDATE category SET label = :label WHERE id = :id ";


    //Prépare la requête SQL

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":label", $label);

    //Execute la requête SQL
    $stmt->execute();


}
