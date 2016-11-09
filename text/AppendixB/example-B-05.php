<?php

$html = <<<_HTML_
<ul>
  <li>Beef Chow-Fun</li>
  <li>Sauteed Pea Shoots</li>
  <li>Soy Sauce Noodles</li>
</ul>
_HTML_;

preg_match('@<li>(.*?)</li>@',$html,$matches);
$match_count = preg_match_all('@<li>(.*?)</li>@',$html,$matches_all);

print "preg_match_all()<br>\n matched<br>\n $match_count<br>\n times.<br>\n";

echo "<br>\n";

print "preg_match() array: ";
var_dump($matches);

print "preg_match_all() array: ";
var_dump($matches_all);