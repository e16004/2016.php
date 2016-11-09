<?php

// '12345-6789' - が入るので数値ではなく文字列 -> ''をつける
$_POST['zip'] = '12345-6789';
// $_POST['zip'] = 12345;

// Test the value of $_POST['zip'] against the
// pattern ^\d{5}(-\d{4}?$
if (preg_match('/^\d{5}(-\d{4})?$/',$_POST['zip'])) {
    print $_POST['zip'] . " is a valid US ZIP Code";
} else {
    print $_POST['zip'] . " is <b>not</b> a valid US ZIP Code";
}

var_dump($_POST['zip']);

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


// Test the value of $html against the pattern <b>[^<]+</b>
// The delimiter is @ since / occurs in the pattern
$is_bold = preg_match('@<b>[^<]+</b>@',$html);
  // trueで1、falseで0を返す

var_dump($is_bold);







