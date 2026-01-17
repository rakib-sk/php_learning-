# PHP Class 3 🚀
## String Operators, Null Operator & Control Flow

এই ক্লাসে আমরা শিখবো:
- String Operators
- Space / String Concatenation
- Null Operator
- Control Flow
- Ternary Operator
- Switch Case

---

## 6️⃣ String Operators
PHP-তে **String Operators** ব্যবহার করা হয় একাধিক স্ট্রিং একসাথে জোড়া লাগানোর জন্য।

| Operator | Description |
|--------|-------------|
| `.` | Concatenation (জোড়া লাগানো) |
| `.=` | Append (আগের স্ট্রিং-এর সাথে যুক্ত করা) |

---

### 🔹 Concatenation Operator (`.`)
```php
$firstName = "Rakib";
$lastName  = "Hossen";

echo $firstName . $lastName;
```
***Output:***
```
RakibHossen
```

### 🔹 Append Operator (.=)
```php
$text = "Hello";
$text .= " PHP";

echo $text;
```

### Output:
```
Hello PHP
```

## 🧩 Space String Operator
- স্ট্রিং জোড়া লাগানোর সময় স্পেস আলাদা করে দিতে হয়।
### Example
```php
$word1 = "Hello";
$word2 = "World";

echo $word1 . " " . $word2;
```

***Output:***
```
Hello World
```

***📌 Note:*** PHP নিজে থেকে space দেয় না, " " ব্যবহার করতে হয়।

## ❓ Null Operator (Null Coalescing Operator)
- ?? Operator ব্যবহার করা হয় কোনো ভেরিয়েবল exists আছে কিনা বা null কিনা তা চেক করার জন্য।
### Syntax
```php
$result = $variable ?? "Default Value";
```

### Example
```php
$name = $_GET['name'] ?? "Guest";
echo $name;
```
***যদি name না থাকে, তাহলে output হবে:***
```
Guest
```

## 🔁 Control Flow
- Control Flow দিয়ে প্রোগ্রামের চলার দিক (decision making) নিয়ন্ত্রণ করা হয়।

## 🔀 Ternary Operator
- এটা if-else এর শর্ট ফর্ম।
### Syntax
```php
(condition) ? true_value : false_value;
```
### Example
```php
$age = 20;
$status = ($age >= 18) ? "Adult" : "Child";

echo $status;
```

***Output:***
```
Adult
```

***📌 Note:*** Simple condition-এর জন্য Ternary ভালো, কিন্তু complex হলে if-else ভালো।


## 🔄 Switch Case
- একাধিক condition check করার জন্য switch ব্যবহার করা হয়।
### Syntax
```php
switch ($variable) {
    case value1:
        // code
        break;
    case value2:
        // code
        break;
    default:
        // code
}
```

### Example
```php
$day = "Friday";

switch ($day) {
    case "Monday":
        echo "Start of work";
        break;

    case "Friday":
        echo "Weekend is coming 😄";
        break;

    case "Sunday":
        echo "Holiday";
        break;

    default:
        echo "Normal day";
}
```

***Output:***
```
Weekend is coming 😄
```

## ✅ Class 3 Summary
***এই ক্লাসে আমরা শিখেছি:***
- ✔ String Operators (. , .=)
- ✔ Space সহ String Concatenation
- ✔ Null Coalescing Operator (??)
- ✔ Control Flow concept
- ✔ Ternary Operator
- ✔ Switch Case