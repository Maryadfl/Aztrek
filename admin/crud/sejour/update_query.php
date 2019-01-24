<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneEntity("sejour", $id);

$title = $_POST['title'];
$description_short = $_POST['description_short'];
$description = $_POST['description'];
$country_id = $_POST['country_id'];
$levels_id = $_POST['levels_id'];


$tag_ids = isset($_POST['tag_ids']) ? $_POST['tag_ids'] : [];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

updateSejour($id, $title, $description_short, $description, $country_id, $levels_id, $filename,  $tag_ids);

header('Location: index.php');








