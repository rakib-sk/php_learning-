<?php
//For loop

for($i=0; $i<=5; $i++){
    echo $i."\n";
}

//While loop
$i = 1;

do {
    echo $i . "\n";
    $i++;
} while ($i <= 5);

//DoWhile
$i = 1;

do {
    echo $i . "\n";
    $i++;
} while ($i <= 5);

//Foreach
$colors = ["Red","Back","Yellow"];
foreach($colors as $clr){
    echo $clr."\n";
}

//Dict
$students = [
    "name" => "Rakib",
    "age" => 18,
    "dep" => "CST"
];
foreach($students as $key => $value){
    echo $key." : ".$value."\n";
}
