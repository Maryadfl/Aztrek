<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$label = $_POST['label'];

insertCountry($label);

header('Location: index.php');
