<?php
//Callback function

function callBackTest($callBack){
    return $callBack("arrow function\n");
}
$resulat = callBackTest(function($text){
    return "I am $text";
});

echo $resulat;