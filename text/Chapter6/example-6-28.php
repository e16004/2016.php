<?php

$defaults['delivery'] = 'yes';
$defaults['size'] = 'Large';


print '<input type="checkbox" name="delivery" value="yes"';
if ($defaults['delivery'] == 'yes') { print ' checked="checked"'; }
print '> Delivery?';
echo "<br>\n";


// print '<input type="radio" name="size" value="small"';
// if ($defaults['size'] == 'small') { print ' checked="checked"'; }
// print '> Small ';
// print '<input type="radio" name="size" value="medium"';
// if ($defaults['size'] == 'medium') { print ' checked="checked"'; }
// print '> Medium';
// print '<input type="radio" name="size" value="large"';
// if ($defaults['size'] == 'large') { print ' checked="checked"'; }
// print '> Large';


//上の短縮版 動作は不明
$sizesize = array(
  'Small',
  'Medium',
  'Large',
);

for($i=0; $i<3; $i++) {
  print '<input type="radio" name="size" value='. $sizesize[$i];
    if ($defaults['size'] == $sizesize[$i]) { print ' checked="checked"'; }
  print '> '. $sizesize[$i];
}




