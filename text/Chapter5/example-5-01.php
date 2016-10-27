<?php
function page_header() {
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#ffff00">';
    print '<font color="#ff0000">';
}

$user = 'aieuo';

page_header();
print "Welcome, $user";
print "</body></html>";