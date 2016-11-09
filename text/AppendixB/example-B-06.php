<?php

$ok_html  = "I <b>love</b> shrimp dumplings.<br>\n";
$bad_html = "I <b>love</i> shrimp dumplings.<br>\n";

echo "ok_html  :  ". $ok_html;
echo "bad_html  :  ". $bad_html;
echo "<br>\n";
echo "<br>\n";

//50%の正解
if (preg_match('@<[bi]>.*?</[bi]>@',$ok_html)) {
    print "Good for you! (OK, No backreferences)<br>\n";
} else {
  echo "ok  ->  NG...";
}
if (preg_match('@<[bi]>.*?</[bi]>@',$bad_html)) {
    print "Good for you! (Bad, No backreferences)<br>\n";
} else {
  echo "bad  ->  NG...";
}

echo "<br>\n";

//100%の正解 後方参照 (.)\1 のカタチ
if (preg_match('@<([bi])>.*?</\\1>@',$ok_html)) {
    print "Good for you! (OK, Backreferences)<br>\n";
} else {
  echo "ok  ->  NG...";
}
if (preg_match('@<([bi])>.*?</\\1>@',$bad_html)) {
    print "Good for you! (Bad, Backreferences)<br>\n";
} else {
  echo "bad  ->  NG...";
}