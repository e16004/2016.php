<?php

$errors = array();
$_POST['email'] = 'test';


if (strlen($_POST['email']) == 0) {
   $errors[] = "You must enter an e-mail address.";
} else {
  $errors[] = "OK!";
}

var_dump($errors);



