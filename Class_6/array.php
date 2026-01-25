<?php
$name = array(
    "Sanjida","Rakib","Sifat","Tamim","Hanjala"
);
//var_dump($name);
print_r($name);

//Manupulation

$number = [1,2,3,4];
print_r($number);

//append an element at last index
array_push($number,5);
print_r($number);

//append an element at first index
array_unshift($number,0);
print_r($number);

//Remove first element
array_shift($number);
print_r($number);

//Remove last element
array_pop($number);
print_r($number);
