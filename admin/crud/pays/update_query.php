<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

$label = $_POST['label'];
$description = $_POST['description'];
$country = getOneEntity("country", $id);


// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $country["image"];
}


updateCountry($id, $label, $description, $filename);

header('Location: index.php');
