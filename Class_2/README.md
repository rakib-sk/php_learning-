# PHP Operators 📌

PHP-তে **Operator** ব্যবহার করে ভেরিয়েবল, ভ্যালু এবং এক্সপ্রেশন-এর উপর বিভিন্ন ধরনের অপারেশন করা হয়।

---

## 1️⃣ Arithmetic Operators
গাণিতিক হিসাবের জন্য ব্যবহৃত হয়।

| Operator | Description | Example |
|--------|------------|--------|
| `+` | Addition | `$a + $b` |
| `-` | Subtraction | `$a - $b` |
| `*` | Multiplication | `$a * $b` |
| `/` | Division | `$a / $b` |
| `%` | Modulus (remainder) | `$a % $b` |
| `**` | Exponentiation | `$a ** $b` |

### Example
```php
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a % $b; // 1
```

## 2️⃣ Assignment Operators
- ভেরিয়েবল-এ ভ্যালু Assign করার জন্য।

| Operator | Meaning |
| --- | --- |
| `=` | Assign |
| `+=` | Add & assign |
| `-=` | Subtract & assign |
| `*=` | Multiply & assign |
| `/=` | Divide & assign |
| `%=` | Modulus & assign |


### Example
```php
$x = 5;
$x += 3; // $x = 8
```
## 3️⃣ Comparison Operators
- দুইটি ভ্যালুর তুলনা করার জন্য।

| Operator | Description |
| --- | --- |
| `==` | Equal |
| `===` | Identical (value + type) |
| `!=` | Not equal |
| `<>` | Not equal |
| `!==` | Not identical |
| `>` | Greater than |
| `<` | Less than |
| `>=` | Greater than or equal |
| `<=` | Less than or equal |
| `<=>` | Spaceship |

### Example
```php
var_dump(5 == "5");   // true
var_dump(5 === "5");  // false
```
## Increment/Decrement Operators in PHP

| Operator | Description |
| --- | --- |
| `++$x` | Pre-increment |
| `$x++` | Post-increment |
| `--$x` | Pre-decrement |
| `$x--` | Post-decrement |

### Example
```php
$x = 5;
echo ++$x; // 6
```

## 5️⃣ Logical Operators
- একাধিক condition চেক করার জন্য।

| Operator | Description |
| --- | --- |
| `&&` | AND |
| `and` | AND |
| `!` | NOT |
| `or` | OR |
| `xor` | XOR |


### Example
```php
$a = true;
$b = false;
var_dump($a && $b); // false
```

## 6️⃣ String Operators
- স্ট্রিং জোড়া লাগানোর জন্য।

| Operator | Description |
| --- | --- |
| `.` | Concatenation |
| `.=` | Append |

### Example
```php
$first = "Hello";
$second = " PHP";

echo $first . $second;
```

## Array Operators in PHP

| Operator | Description |
| --- | --- |
| `+` | Union |
| `==` | Equal |
| `===` | Identical |
| `!=` | Not equal |
| `!==` | Not identical |


### Example
```php
$a = ["a" => 1];
$b = ["b" => 2];

$c = $a + $b;
print_r($c);
```

## 8️⃣ Conditional Assignment Operators
-🔹 Ternary Operator
```php
$result = ($age >= 18) ? "Adult" : "Child";
```

- 🔹 Null Coalescing Operator
```php
$name = $_GET['name'] ?? "Guest";
```

## 9️⃣ Bitwise Operators
| Operator | Description |
| --- | --- |
| `&` | AND |
| ` ` | OR |
| `^` | XOR |
| `~` | NOT |
| `<<` | Left shift |
| `>>` | Right shift |

### Example
```php
echo 5 & 3; // 1
```

## 🔟 Type Operators
- instanceof
```php
if ($obj instanceof MyClass) {
    echo "Object matched";
}
```

## 1️⃣1️⃣ Error Control Operator
| Operator | Description |
| --- | --- |
| `@` | Error suppress |
 
### Example
```php
@$file = fopen("test.txt", "r");
```

## 1️⃣2️⃣ Execution Operator
| Operator | Description |
| --- | --- |
| `` ` `` | Shell command execute |

### Example
```php
$output = `dir`;
echo $output;
```

## ✅ Summary
- এই README-তে PHP-এর সব গুরুত্বপূর্ণ Operators কভার করা হয়েছে:
- ✔ Arithmetic
- ✔ Assignment
- ✔ Comparison
- ✔ Logical
- ✔ String
- ✔ Array
- ✔ Conditional
- ✔ Bitwise
- ✔ Type
- ✔ Error Control
- ✔ Execution

***📌 Tip:*** Strong PHP Developer হতে Operators + Control Flow ভালো জানা বাধ্যতামূলক।

