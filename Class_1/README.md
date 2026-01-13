# PHP Class 1 🚀

## 📜 History of PHP
PHP (Hypertext Preprocessor) একটি জনপ্রিয় **server-side scripting language**, যা মূলত ওয়েব ডেভেলপমেন্টের জন্য ব্যবহৃত হয়।  

PHP প্রথম তৈরি করেন ডেনমার্ক-কানাডিয়ান প্রোগ্রামার **Rasmus Lerdorf** ১৯৯৪ সালে।  
এই ভাষা ব্যবহার করে সহজেই ডাইনামিক ওয়েবসাইট তৈরি, ফর্ম হ্যান্ডলিং, ডাটাবেজ সংযোগ এবং সার্ভার-সাইড লজিক লেখা যায়।  

বর্তমানে **WordPress, Laravel, Facebook-এর অনেক অংশসহ** অসংখ্য বড় প্রজেক্টে PHP ব্যবহৃত হচ্ছে।

---

## 🧩 PHP Syntax

### Without HTML File
```php
<?php
    // Codes here
?>
```
***Note:***HTML ফাইল ছাড়া শুধুমাত্র PHP ফাইলে কোড লিখলে closing ?> tag দেওয়া বাধ্যতামূলক নয়।

## 📦 Variables in PHP
- PHP-তে ভেরিয়েবল লেখার সময় অবশ্যই $ চিহ্ন ব্যবহার করতে হয়।
### Example
```php
<?php
    $name = "Rakib Hossen";
    echo $name;
?>
```

## 🔒 Constants in PHP
- Constant এর মান পরিবর্তন করা যায় না।
### Syntax
```php
define("CONSTANT_NAME", value);
```

### Example
```php
define("SITE_NAME", "My Website");
echo SITE_NAME;
```
# 🧠 Data Types in PHP

| Data Type | Description |
| --- | --- |
| string | Text data |
| int | Whole number |
| float | Decimal number |
| bool | true / false |
| array | Multiple values |
| object | Data as object |
| null | Empty value |
| resource | External resource reference |
| mixed | Any type of value |

## 🔍 How to Check Data Type
- PHP-তে ডেটা টাইপ চেক করার জন্য var_dump() ব্যবহার করা হয়।
### Syntax
```php
var_dump(data);
```
### Example
```php
var_dump(10);

```
## 🌍 Variable Scope in PHP
- PHP-তে মূলত ৩ ধরনের Scope আছে:
- Local -> ফাংশনের ভিতরে declare করলে শুধু সেখানেই কাজ করে
- Global -> ফাংশনের বাইরে declare করা ভেরিয়েবল (ব্যবহার করতে global keyword লাগে)
- Static -> ফাংশনের ভিতরে value retain করে রাখে

## 🟢 Local Scope
```php
function myTest(){
    $x = 5;
    echo "Variable x is inside function: $x";
}
myTest();
// Outside the function (will not work)
echo $x;
```

## 🟡 Static Variable
```php
function staticVariable(){
    static $st_var = 0;
    echo $st_var++;
}

staticVariable(); // 0
staticVariable(); // 1
staticVariable(); // 2
```

***📌 Note:*** static keyword ব্যবহার করলে ভেরিয়েবল তার আগের মান ধরে রাখে।

## 🔵 Global Variable
```php
$x = 10; 

function globalTest(){
    global $x;
    echo $x;
}

globalTest();
```

## ⚙️ Operators in PHP
- PHP-তে বিভিন্ন ধরনের অপারেটর রয়েছে, যেমন:
- Arithmetic Operators (+ - * / %)
- Assignment Operators (= += -=)
- Comparison Operators (== === != > <)
- Logical Operators (&& || !)
- Increment / Decrement (++ --)

## ✅ End of Class 1
***এই ক্লাসে আমরা শিখেছি:***
- PHP এর ইতিহাস
- Syntax
- Variable ও Constant
- Data Types
- Scope
- Basic Operators


