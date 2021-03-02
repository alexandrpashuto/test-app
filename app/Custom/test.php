<?php
// количество аргуметов переданных в консоли
echo "The number of array elements \$argv = " . $_SERVER['argc'] . "\n";
// выводим массива аргументов переданных в консоли
print_r($_SERVER['argv']);
$arr = explode(',',$_SERVER['argv'][2]);

print_r($arr);
