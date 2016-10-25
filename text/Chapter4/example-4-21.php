<?php
$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
echo '<table border="solid">';
print '<tr><td>' . implode('</td><td>',$dimsum) . '</td></tr>';
echo '</table>';