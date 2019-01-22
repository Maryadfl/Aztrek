<?php
require_once '../../security.php';
require_once '../../../model/database.php';

//recupère lid
$id = $_POST['id'];

//fonction qui supprime la ligne
$error = deleteEntity("country", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

header('Location: index.php');
