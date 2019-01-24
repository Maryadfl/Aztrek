<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$label = $_POST['label'];

insertCategorie($label);

header('Location: index.php');









