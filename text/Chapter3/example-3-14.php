<?php

$first_name 'test1';
$last_name 'test2';

if (! strcasecmp($first_name,$last_name)) {
    print '$first_name and $last_name are equal.';
} else {
  print '$first_name and $last_name are not equal.';
}
//