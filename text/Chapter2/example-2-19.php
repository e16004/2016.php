<?php


$username = 'james';
$domain = '@example.com';

// Concatenate $domain to the end of $username the regular way
$username = $username . $domain;

echo 'username + domain :           '. $username.'<br>';
// Concatenate with the combined operator
$username .= $domain;
echo 'username + domain + domain :  '. $username;
