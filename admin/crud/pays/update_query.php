<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];


$label = $_POST['label'];
$description = $_POST['description'];
insertCountry($id, $label, $description);

header('Location: index.php');
