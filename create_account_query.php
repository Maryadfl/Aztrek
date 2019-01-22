<?php

require_once "../../model/database.php";

$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$password = $_POST["password"];

$result = insertUser($name, $surname, $email, $password);

if ($result) {
    header("Location: admin/");

} else{
    header("Location: create_account.php");
}



