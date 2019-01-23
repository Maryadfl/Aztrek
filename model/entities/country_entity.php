<?php

//pour générer les pays
/**
 * @param string $label
 * @param string $description
 * @param string $image
 */
function insertCountry(string $label, string $description, string $image) {
    global $connection;


    $query = "INSERT INTO  country (label, image, description) VALUES (:label, :image, :description)";


    //Prépare la requête SQL

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);

    //Execute la requête SQL
    $stmt->execute();


}

//fonction pour charger les modifications
function updateCountry(int $id, string $label) {
    global $connection;


    $query = "UPDATE country SET label = :label WHERE id = :id ";


    //Prépare la requête SQL

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":label", $label);

    //Execute la requête SQL
    $stmt->execute();


}
