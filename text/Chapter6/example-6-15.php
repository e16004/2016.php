<?php

$errors = array();
$_POST['age'] = 32;
// $_POST['age'] = '32abc';
// $_POST['age'] = 'abc';
// $_POST['age'] = '';
// $_POST['age'] = 42.5;
// $_POST['age'] = 5;

if ($_POST['age'] != strval(intval($_POST['age']))) {
// if ($_POST['age'] != strval(floatval($_POST['age']))) {
    $errors[] = "Your age must be a number.";
} elseif (($_POST['age'] < 18) || ($_POST['age'] > 65)) {
    $errors[] = "Your age must be at least 18 and no more than 65.";
} else {
    $errors[] = "good.";
}

var_dump($errors);
var_dump($_POST['age']);



