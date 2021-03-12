<?php
    $x= 1;
    function hello($x){
        $sum = $x*2;
        echo "sum= ".$sum."函数执行结束 <br />";
        return $sum;

    }
?>
<p>----我是分割綫----</p>
<?php
$sum=hello($x);
echo"x=$x <br />";
echo "sum=$sum <br />";
?>