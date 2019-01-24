<?php

function getAllSejours() {
    global $connection;

    $query = "
    SELECT sejour.*,
           country.label AS country,
           levels.label AS levels
    FROM sejour
    INNER JOIN country on sejour.country_id = country.id
    INNER JOIN levels on sejour.levels_id = levels.id
    GROUP BY sejour.id
    ";

    //Prépare la requête SQL
    $stmt = $connection->prepare($query);
    //Execute la requête SQL
    $stmt->execute();

    return $stmt->fetchAll();
}



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

//pour insérer un nouveau séjour
function insertSejour (string $title, int $country_id, string $image, int $nb_days, string $description_short, string $description,  int $levels_id) {
    global $connection;

    $query = "
    INSERT INTO sejour (title, image, nb_days, description, description_short, country_id, levels_id) 
    VALUES (:title, :image, :nb_days, :description, :description_short, :country_id, :levels_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_short", $description_short);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":nb_days", $nb_days);
    $stmt->bindParam(":country_id", $country_id);
    $stmt->bindParam(":levels_id", $levels_id);

    $stmt->execute();
}

//fonction pour charger les modifications d'un séjour
function updateSejour(int $id, string $title, string $description_short, string $description, int $nb_days, string $country_id, string $levels_id, string $filename) {
    global $connection;


    $query = "UPDATE sejour SET title = :title, description_short = : description_short, description = : description, nb_days = : nb_days, country_id = :country_id, levels_id =:levels_id, image = :image
    WHERE id = :id ";


    //Prépare la requête SQL

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":description_short", $description_short);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":nb_days", $nb_days);
    $stmt->bindParam(":country_id", $country_id);
    $stmt->bindParam(":levels_id", $levels_id);
    $stmt->bindParam(":image", $filename);

    //Execute la requête SQL
    $stmt->execute();


}



