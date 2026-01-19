# Class 5

## Functions
- What is function?
- function is a reusebal block of code. That perfom a specfic task.

- Why use function?
- Reuse code
- Easy to organize code
- Easy to fix bugs
- Easy to make code redable
- Create Module 

- How many type function in php?
- anonymous function
- Arrow function
- 

- How to deacler function?
### Normal function syantax
```php
function funcName(){
    //all code here
}
```
- function -> is a function declear keyword
- funcName -> is a function name. 
- () -> Parentheses must be written at the end of all function names.
- { } -> That is start and end block

***note:***It all time use a valid variable name is functio. Evary programmar use camel case to declaear function name.

### Example
```php
<?php
function displayMsg(){
    echo "Hello I am function";
}
```
### If you have declear function and if youe use this function your need to call it.
- How to call function?
- If you went to call function to write just function name.
### Example
```php
displayMsg()
```
### Output
```php
Hello I am function
```

1. `function displayMsg()`: This line defines a new function named `displayMsg`.
2. `echo "Hello I am function";`: Inside the function, this line prints the message "Hello I am function".
3. `displayMsg();`: This line calls the `displayMsg` function, which executes the code inside the function and prints the message.
Note: Since the function doesn't take any parameters, you can call it without passing any arguments. 


### Make function using prameter
## syantax
```php
function add(prameter1,pramter2,........prameterN){
    //code
}
```
### Example
```php
<?php
function toSum($a,$b){
    $sum = $a+$b;
    return $sum;
}
echo toSum(10,20)
```
### Expain:
Here's a breakdown of the code:
1. `function toSum($a, $b)`: This line defines a new function named `toSum` that takes two parameters, `$a` and `$b`.
2. `$sum = $a + $b;`: Inside the function, this line adds the values of `$a` and `$b` and stores the result in a new variable `$sum`.
3. `return $sum;`: This line returns the value of `$sum` to the caller.
4. `echo toSum(10, 20);`: This line calls the `toSum` function with arguments `10` and `20`, and prints the returned value using `echo`.

*Step-by-Step Execution:*

1. `toSum(10, 20)` is called.
2. `$a` is set to `10` and `$b` is set to `20`.
3. `$sum` is calculated as `10 + 20 = 30`.
4. The value `30` is returned by the function.
5. `echo` prints the returned value `30`.

So, the output of the code will be: *30*.

Note: In PHP, it's conventional to use camelCase or underscore notation for function names, so `toSum` could be written as `to_sum` or `calculateSum`. 


## Anonymous function
- Anonymous function is without name function. Anonymouse function has no name. 

### Syantax
```php
<?php
function (){
  //codes
};
```
**Note**: If you cretae a anonymous function, so you must need to close it using samiclone(;)

### Example
```php
<?php
function () {
    $anonymous = "Hi, i am anonymous function";
}
```

### How to call anonymous function?
- If you call anonymous function, so you can declear it in a variable.

### Example
```php
<?php
//Anonymous function

$anonymousFunc = function(){
    echo "I am anonymous function.\n";
};
$anonymousFunc();
```

## arrow function
- An arrow function in PHP is a shorthand syntax for writing simple anonymous functions (closures).

### Syantax
```php
$funcName = fn($n1,n2) => $n1+$n2;
```
## Example
```php
<?php
//Arrow function

$arrowFunc = fn() => $arroFun="Hi i am arrow function\n";
echo $arrowFunc();

//With prameter
$arrowWithPra = fn($a,$b) => $sum = $a + $b."\n";

echo $arrowWithPra(10,30);
```
- fn keyword use to create arrow function.


## Callback function.
- A callback function in PHP is a function that is passed as an argument to another function and is executed by that receiving function at a later time or when a specific event occurs. 
### Example
```php
<?php
//Callback function

function callBackTest($callBack){
    return $callBack("arrow function\n");
}
$resulat = callBackTest(function($text){
    return "I am $text";
});

echo $resulat;
```