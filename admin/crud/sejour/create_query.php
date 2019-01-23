<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$title = $_POST['title'];
$category_id = $_POST['category_id'];
$country_id = $_POST['country_id'];
$levels_id = $_POST['level_id'];
$nb_days = $_POST['nb_days'];
$description = $_POST['description'];
$description_short = $_POST['description_short'];
$publie = ($_POST['publie'] == "on") ? 1: 0;

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../images/" . $filename);

insert($title, $category_id, $country_id, $levels_id, $filename, $description, $description_short, $nb_days,  $publie, $user["id"]);

header('Location: index.php');




