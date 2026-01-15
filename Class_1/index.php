<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php</title>
</head>
<body style="font-size: 15px;">
  <?php
      echo "<h2>Basic sytanax in php</h2><br>";
    //Basic syantax
      echo "Hello world";
      //Varible in php
      $name = "Sanjida Aktar";
      echo "<br>$name";

      echo "<br>";
      echo "<h2>Constant in php</h2><br>";
    //Constant in php
      define("PI",3.1416);
      echo "<br>",PI;

      echo "<br>";
      echo "<h2>DataType in php</h2><br>";
    //Datatype in php
      $str = "I am String";
      $integer = 10;
      $floating = 10.10;
      $boolen = true;
      $arrays = [1,2,3];
      $null = NULL;
      
      echo "<br>",var_dump($str);
      echo "<br>I am: ",var_dump($integer);
      echo "<br>I am: ",var_dump($floating); 
      echo "<br>I am: ",var_dump($boolen);
      echo "<br>I am: ",var_dump($arrays);
      echo "<br>I am: ",var_dump($null);
      
      echo "<br>";
      echo "<h2>Scope in php </h2><br>";
      //Local variable in php
      function myTest(){
          $x = 5;
          echo "<br>Variable x is inside function is: $x";
      }
      myTest();
      //outside x is not work
      $x = myTest();
      echo "<br>Variable x is outside: $x";
      //Static variable
      function staticVariable(){
          static $st_var = 0;
          echo $st_var++;
      }
      staticVariable(); //0
      staticVariable(); //1
      staticVariable(); //2

     //Global variable
     $global_var = 20;
     function gloTest(){
         global $global_var;
         echo $global_var;
     }
     gloTest();
?>    

</body>
</html>