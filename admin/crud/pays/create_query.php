<?php
require_once '../../security.php';
require_once '../../../model/database.php';


$label = $_POST['label'];
$description = $_POST['description'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);


insertCountry($label, $description, $filename);

header('Location: index.php');








