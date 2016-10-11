<?php

/*$flg = true;
if($flg) {
  echo '$flg は true です';
} else {
  echo '$flg は false です';
}
echo '<br>';*/

$num = rand(0,20);
$num = 6;
if($num > 5 && $num < 10) {
  echo 'num は 5 超過、 10 未満：'.$num;
} else if ($num < 5) {
  echo 'num は 5 未満：'.$num;
} else if ($num > 10) {
  echo 'num は 10 超過：'.$num;
}else {
  echo 'num は '.$num;
}
echo '<br>';
?>


<?php $name = 'sato';
if($name === 'yamada'):
?>
  echo 'name is not yamada';
<?php elseif($name === 'sato') : ?>
  name is not sato;
<?php else: ?>
  echo 'name is tanaka'
<?php endif; ?>


