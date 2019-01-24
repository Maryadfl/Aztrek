<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$title = $_POST['title'];
$country_id = $_POST['country_id'];
$levels_id = $_POST['levels_id'];
$nb_days = $_POST['nb_days'];
$category_id = $_POST['category_id'];
$description = $_POST['description'];
$description_short = $_POST['description_short'];


// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertSejour($title, $country_id, $levels_id, $nb_days, $category_id, $description_short, $description, $filename );

header('Location: index.php');




