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
function insertSejour(string $title, int $country_id, string $image,int $nb_days,string $description_short,  string $description,  int $levels_id,  int $publie, int $user_id) {
    global $connection;

    $query = "
    INSERT INTO sejour (title, image, nb_days, description, description_short, publie,  user_id, country_id, levels_id) 
    VALUES (:title, :image, :nb_days, :description, :description_short, :publie, NOW(), :user_id, :country_id, :levels_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_short", $description_short);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":nb_days", $nb_days);
    $stmt->bindParam(":publie", $publie);
    $stmt->bindParam(":country_id", $country_id);
    $stmt->bindParam(":levels_id", $levels_id);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
}



