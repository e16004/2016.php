<?php

$errors = array();
$_POST['price'] = 32;
// $_POST['price'] = 35.73;
// $_POST['price'] = '3abc5';
// $test = '';


if ($_POST['price'] != strval(floatval($_POST['price']))) {
    $errors[] = 'Please enter a valid price.';
} else {
    $errors[] = 'okok';
}

var_dump($errors);
