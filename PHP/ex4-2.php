<?php
$i=10;
echo ($i>20)?"Hello":"Bye";
?>

<?php
$input=isset($value)?$value:"Empty";
echo $input."\n";
$input=$value ?? "Empty";
echo $input;


?>