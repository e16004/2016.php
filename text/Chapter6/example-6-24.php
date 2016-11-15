<?php

$defaults['my_name'] = "<b>ここに名前を入力</b>";

print '<input type="text" name="my_name" value="' .
      htmlentities($defaults['my_name']). '">';









