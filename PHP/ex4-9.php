<?php
$sum = 0;
  $i = 0;
  while (true){
    $i++;
    $sum += $i;
    if ( $sum >= 100) break;
  }
  echo "\$sum : $sum";
?>