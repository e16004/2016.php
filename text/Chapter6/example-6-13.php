<?php

$errors = array();
$_POST['name'] = ' test     ';


if (strlen(trim($_POST['name'])) == 0) {
    $errors[] = "Your name is required.";
} else {
    $errors[] = "okey";
}

$_POST['name'] = trim($_POST['name']);

var_dump($errors);
var_dump($_POST['name']);

