<?php

$_POST['email'] = 'president@whitehouse.gov';
if (strcasecmp($_POST['email'], 'president@whitehouse.gov') == 0) {
    print "Welcome back, Mr. President.";
} else {
  echo 'NG..';
}