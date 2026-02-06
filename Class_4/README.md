# PHP Class 4 🚀
## Loops in PHP

এই ক্লাসে আমরা শিখবো:
- Loop কী
- PHP-তে Loop কেন দরকার
- PHP-এর সব ধরনের Loop
- Practical Examples

---

## 🔁 What is Loop?
**Loop** ব্যবহার করা হয় কোনো কাজ **বারবার (repeatedly)** করার জন্য।

উদাহরণ:
- ১ থেকে ১০ পর্যন্ত সংখ্যা প্রিন্ট করা  
- Array-এর সব value দেখানো  
- ডাটাবেজ থেকে একাধিক row আউটপুট করা  

একই কোড বারবার না লিখে Loop ব্যবহার করলে:
- ✔ কোড ছোট হয়  
- ✔ সময় বাঁচে  
- ✔ Bug কম হয়  

---

## 🔄 Types of Loops in PHP
PHP-তে প্রধানত ৪ ধরনের Loop আছে:

1. `for` Loop  
2. `while` Loop  
3. `do...while` Loop  
4. `foreach` Loop  

---

## 1️⃣ for Loop
যখন আগে থেকেই জানা থাকে **কয়বার Loop চলবে**, তখন `for` Loop ব্যবহার করা হয়।

### Syntax
```php
for (initialization; condition; increment/decrement) {
    // code
}
```

### Example
```php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
```
### Output:
```
1
2
3
4
5
```

## 2️⃣ while Loop
- যতক্ষণ condition true থাকবে, ততক্ষণ Loop চলবে।
### Syntax
```php
while (condition) {
    // code
}
```

### Example
```php
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
```

## 3️⃣ do...while Loop
- এই Loop-এ আগে একবার code চলবেই, পরে condition চেক হয়।
### Syntax
```php
do {
    // code
} while (condition);
```

### Example
```php
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
```

***📌 Note:***Condition false হলেও do...while অন্তত একবার execute হয়।

## 4️⃣ foreach Loop
- Array নিয়ে কাজ করার জন্য সবচেয়ে বেশি ব্যবহার হয়।
### Syntax
```php
foreach ($array as $value) {
    // code
}
```

### Example
```php
$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    echo $color . "<br>";
}
```

-🔹 foreach with key & value
```php
$student = [
    "name" => "Rakib",
    "age" => 18,
    "class" => 10
];

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
```

## ⛔ Loop Control Statements
- 🔸 break
- Loop সম্পূর্ণভাবে বন্ধ করে দেয়।
```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}
```

- 🔸 continue
- বর্তমান iteration skip করে পরের iteration-এ যায়।
```php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . "<br>";
}
```

## ✅ Class 4 Summary
এই ক্লাসে আমরা শিখেছি:
- ✔ Loop কী এবং কেন দরকার
- ✔ for Loop
- ✔ while Loop
- ✔ do...while Loop
- ✔ foreach Loop
- ✔ break & continue