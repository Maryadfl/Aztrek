<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$label = $_POST['label'];

updateCategorie($id, $label);

header('Location: index.php');
