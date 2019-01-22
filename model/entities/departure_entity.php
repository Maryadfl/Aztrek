<?php

//fonction pour afficher le tableau des départs par pays
function getAllDepartsBySejour(string $departure) {
    global $connection;

    $query = "
    SELECT departure.*,
    departure.sejour_id AS sejour
    FROM departure
    INNER JOIN sejour on departure.sejour_id = sejour.id
    WHERE departure.sejour_id = :departure
    GROUP BY departure.id 

    
    ";

    //Prépare la requête SQL
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":departure", $departure);
    //Execute la requête SQL
    $stmt->execute();

    return $stmt->fetchAll();

}



