<?php

$_POST['zipcode'] = 73211;
if (strlen(trim($_POST['zipcode'])) != 5) {
    print "Please enter a ZIP code that is 5 characters long.";
} else {
  echo 'OK!!';
}
