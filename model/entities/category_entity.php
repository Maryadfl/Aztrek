<?php

//pour générer les catégories
function insertCategorie(string $libelle) {
    global $connection;


    $query = "INSERT INTO  categorie (libelle) VALUES (:libelle)";


    //Prépare la requête SQL

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);

    //Execute la requête SQL
    $stmt->execute();


}

//fonction pour charger les modifications
function updateCategorie(int $id,string $libelle) {
    global $connection;


    $query = "UPDATE categorie SET libelle = :libelle WHERE id = :id ";


    //Prépare la requête SQL

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);

    //Execute la requête SQL
    $stmt->execute();


}
