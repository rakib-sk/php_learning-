<?php
//Arrow function

$arrowFunc = fn() => $arroFun="Hi i am arrow function\n";
echo $arrowFunc();

//With prameter
$arrowWithPra = fn($a,$b) => $sum = $a + $b."\n";

echo $arrowWithPra(10,30);