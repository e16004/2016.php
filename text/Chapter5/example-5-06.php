<?php
function page_header4($color, $title) {
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
}

$user = "aiueo";
page_header4(663322, "Lorem ipsum dolor sit amet");
print "Welcome, $user !";
page_footer();

function page_footer() {
    print '<hr>Thanks for visiting?';
    print '</body></html>';
}




