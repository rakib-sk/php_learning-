# Array in php

## array store multipal element in one variable
### code
```php
$name = array(
    "Sanjida","Rakib","Sifat","Tamim","Hanjala"
);
var_dump($name);
```
### output
```php
array(5) {
  [0]=>
  string(7) "Sanjida"
  [1]=>
  string(5) "Rakib"
  [2]=>
  string(5) "Sifat"
  [3]=>
  string(5) "Tamim"
  [4]=>
  string(7) "Hanjala"
}
```
using print_r to print array human readable
### code
```php
print_r($name);
```
### output
```php
Array
(
    [0] => Sanjida
    [1] => Rakib
    [2] => Sifat
    [3] => Tamim
    [4] => Hanjala
)
```

## Array munapulation
### Code
``php
$number = [1,2,3,4];
//index    0 1 2 3
print_r($number);
array_push($number,5); // Append 5 in number array at last index.
print_r($number);
```
**Note:** array_push method add element in array at last index.

### Output
```php
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
```
- Add Element in array at first index
### Code
```php
array_unshift($number,0);
```
**Note:** array_unshift() -> method add element at first index.
### Output
```php
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 4
    [5] => 5
)
```
- Remove first element in array
```php
array_shift($number);
```
**Note:** array_shift -> method remove first element 

### output
```php
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 4
    [5] => 5
)
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
```
- Remove last element in array
```php
array_pop($number);
```
**Note:** array_shift -> method remove last element 

## output
```php
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
```
## Associative array
- An associative array in PHP is a data structure that stores elements as a collection of key-value pairs, where each value is identified by a unique, user-defined key rather than a sequential numeric index.
### Example
```php
$student = [
    "name" => "Sanjida Aktar",
    "age" => 21,
    "depterment" => "CSE"
];
print_r($student);
``` 
### ouput
```php
Array
(
    [name] => Sanjida Aktar
    [age] => 21
    [depertment] => CSE
)
```
- print array using key
```php
$echo "$student['name']\n";
```
### output
```
Sanjida Aktar
```

## Convart string to array
### Example
```php
$csv = "Sanjida,Rakib";
$name = explode(",",$csv);
```
- explode methods convart string to array

### output
```php
Array
(
    [0] => Sanjida
    [1] => Rakib
)
```
- convart array to string
### Code
```php
$name_str = implode("-",$name);
```
### output
```
Sanjida-Rakib
```

## multidimensional array
- A multidimensional array in PHP is an array that contains one or more other arrays as its elements
### Example
```php
$students = [
    ["name" => "Sanjida"],
    ["name" => "Rakib"]
];
print_r($students);
```

### output
```php
Array
(
    [0] => Array
        (
            [name] => Sanjida
        )

    [1] => Array
        (
            [name] => Rakib
        )

)
```