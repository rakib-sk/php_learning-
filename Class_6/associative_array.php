<?php
$student = [
    "name" => "Sanjida Aktar",
    "age" => 21,
    "depertment" => "CSE"
];
print_r($student);
//print value using key

echo "$student[name]\n";

//String to array
$csv = "Sanjida,Rakib";
$name = explode(",",$csv);
print_r($name);

//Convart array to string
$name_str = implode("-",$name);
print_r($name_str)."\n";