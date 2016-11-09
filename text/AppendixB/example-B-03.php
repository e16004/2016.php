<?php

// $_POST['zip'] = '12345-6789';
$_POST['zip'] = 12345;

// Test the value of $_POST['zip'] against the
// pattern ^\d{5}(-\d{4}?$
if (preg_match('/^(\d{5})(-\d{4})?$/',$_POST['zip'],$matches)) {
    // $matches[0] contains the entire zip
    print "$matches[0] is a valid US ZIP Code<br>\n";
    // $matches[1] contains the five digit part inside the first
    // set of parentheses
    print "$matches[1] is the five-digit part of the ZIP Code<br>\n";
    // If they were present in the string, the hyphen and ZIP+4 digits
    // are in $matches[2]
    if (isset($matches[2])) {
        print "The ZIP+4 is $matches[2];<br>\n";
    } else {
        print "There is no ZIP+4<br>\n";
    }
}

var_dump($matches);

echo "<br>\n";
echo "<br>\n";




echo "<br>\n";



$html = <<<_HTML_
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <b>test woooooooooooooooord</b>
</body>
</html>

_HTML_;



// Test the value of $html against the pattern @<b>[^<]+</b>
// The delimiter is @ since / occurs in the pattern
$is_bold = preg_match('@<b>([^<]+)</b>@',$html,$matches);
if ($is_bold) {
    // $matches[1] contains what's inside the bold tags
    print "The bold text is: $matches[1]";
}

var_dump($matches);

