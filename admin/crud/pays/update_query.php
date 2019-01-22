<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$label = $_POST['label'];

updateCountry($id, $label);

header('Location: index.php');
