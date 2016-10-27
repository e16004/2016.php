<?php
function page_header3($color = 'cc3399') {
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#' . $color . '">';
}


$user = "aiueo";
page_header3();
print "Welcome, $user";
page_footer();

function page_footer() {
    print '<hr>Thanks for visiting!';
    print '</body></html>';
}



