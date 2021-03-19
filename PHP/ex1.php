<?php
$abc=array("A"=>'apple',"B"=>'banana');
print_r($abc); //第一次印出陣列
if (print_r($abc,true)) echo "Hello"; //不會印出陣列
$result=print_r($abc,true);
echo $result; // 第二次印出陣列
?>