<?php

$defaults['comments'] = <<<_COM_
ここにコメントを入力
リターンで改行する
3行目
4行目
_COM_;

print '<textarea name="comments" rows="5" cols="30">';
print htmlentities($defaults['comments']);
print '</textarea>';




