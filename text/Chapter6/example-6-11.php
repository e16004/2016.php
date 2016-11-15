<?php

$errors = array();
$_POST['age'] = 40;
// $_POST['age'] = '40A';

if ($_POST['age'] != strval(intval($_POST['age']))) {
    $errors[] = 'Please enter a valid age.';
} else {
    $errors[] = "OK";
}

var_dump($errors);
