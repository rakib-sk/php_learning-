<?php
echo "--String oprator--\n";
$str1 = "Rakib";
$str2 = "Sanjida\n";

echo $str1 . " ",$str2;

//Make a santance
$product = "Laptop";
$price = 100000;

echo $product," " . "price is: ". $price," BAT\n";

echo "\n--Space ship oprator--\n";
// Space ship oprator
echo 5 <=> 5,"\n"; // 0
echo 5 <=> 4,"\n"; // 1
echo 4 <=> 5,"\n"; // -1

echo "\n--Null oprator--\n";
//Null oprator
$null_test = "abc\n";
echo $null_test ?? "Not null\n";

// Conditional in php
echo "--Conditional in php--\n";
$marks = 90;
if($marks > 80){
    echo "Good\n";
}else{
    "Bad\n";
}

//turnari opeator
echo "--turnari opeator--\n";
echo $marks > 100 ? "Good\n" : "Bad\n";
