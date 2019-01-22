<?php

function getAllSejoursByCountry(int $id) {
    global $connection;

    $query = "
    SELECT sejour.*,
           country.label AS country,
           levels.label AS levels
    FROM sejour
    INNER JOIN country on sejour.country_id = country.id
    INNER JOIN levels on sejour.levels_id = levels.id
    WHERE sejour.country_id = :id
    GROUP BY sejour.id 

    
    ";

    //Prépare la requête SQL
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    //Execute la requête SQL
    $stmt->execute();

    return $stmt->fetchAll();

}

function getOneSejour(int $id): array {
    global $connection;

    $query = "
    SELECT 
      sejour.*,
      country.label AS country,
      levels.label AS levels,
      category.label AS category
    FROM sejour
    INNER JOIN category on sejour.category_id = category.id
    INNER JOIN country on sejour.country_id = country.id
    INNER JOIN levels on sejour.levels_id = levels.id
    WHERE sejour.id = :id
    GROUP BY sejour.id 
      
    
    ";

//Prépare la requête SQL
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    //Execute la requête SQL
    $stmt->execute();

    return $stmt->fetch();

}

function insertRecette(string $titre, int $categorie_id, string $image, string $description, string $description_courte, int $couverts, string $temps_prepa, string $temps_cuisson, int $publie, int $utilisateur_id) {
    global $connection;

    $query = "
    INSERT INTO sejour (titre, image, description, description_courte, couverts, temps_prepa, temps_cuisson, publie, date_creation, utilisateur_id, categorie_id) 
    VALUES (:titre, :image, :description, :description_courte, :couverts, :temps_prepa, :temps_cuisson, :publie, NOW(), :utilisateur_id, :categorie_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":couverts", $couverts);
    $stmt->bindParam(":temps_prepa", $temps_prepa);
    $stmt->bindParam(":temps_cuisson", $temps_cuisson);
    $stmt->bindParam(":publie", $publie);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
}



