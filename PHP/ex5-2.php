<?php
function summary(...$numbers){
    $sum=0;
    foreach($numbers as $i){
        $sum += $i;
    }
return $sum;
}

$total = summary(1,3,5,4,5);
printf("縂計:%d",$total);
?>