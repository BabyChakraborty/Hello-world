<?php
$array_dump_test=array (
    2=>1,
    3=>3,
    'b'=>4,
    4=>2,

);
    var_dump($array_dump_test);
echo "<br/>";

echo $array_dump_test[4];
echo "<br/>";
$array_dump_test[5]='my name';
var_dump($array_dump_test);
echo "<br/>";
//echo $array_dump_test[5];
