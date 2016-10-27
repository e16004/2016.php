<?php
/*
function page_header() {
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#ffffff">';
}

$user = "aiueo";
page_header();
print "Welcome, $user";
page_footer();

function page_footer() {
    print '<hr>Thanks for visiting.';
    print '</body></html>';
}

*/

function page_header() {
    print '<html><head><title>Welcome to my site</title></head>';
}
function page_header2($color) {
    print '<body bgcolor="#' . $color . '">';

}

$user = "aiueo";
page_header();
page_header2('00f0ff');
print "Welcome, $user";
page_footer();

function page_footer() {
    print '<hr>Thanks for visiting.';
    print '</body></html>';
}



