<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

//fonction qui supprime la ligne
$error = deleteEntity("sejour", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

unlink("../../../uploads/" . $sejour["image"]);

header('Location: index.php');



