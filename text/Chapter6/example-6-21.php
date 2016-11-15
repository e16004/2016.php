<?php

$_POST['comments'] = <<<_COMM_
これはコメント<b>強調</b>です。<br>
これはコメント<i>イタリック<i/>です。<br>
_COMM_;

// 通常実行
$comments = $_POST['comments'];
print $comments;
echo "<br>\n";

// Remove HTML from comments
$comments = strip_tags($_POST['comments']);
// Now it's OK to print $comments
print $comments;



