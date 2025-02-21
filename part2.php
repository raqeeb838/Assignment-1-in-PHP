<?php
$a = 5;
$b = 7;

  $subValue = $a - $b;

   echo "Subtraction a and b value = ". $subValue;

   echo "<br>";

$value1 = 5;
$value2 = 7;

  $multiplyValue = $value1 * $value2;

   echo "Multiplication value1 and value2 = ". $multiplyValue;

     
   echo "<br>";
   echo "<h4>Fruits Arrat iteration Using For Loop</h4>";
   $fruits = [
    "apple", "banana", "mango", "orange","grapes","pine apple"
   ];
    

   for($i=0; $i<count($fruits); $i++){
    echo $fruits[$i]."<br>";
   };

  
   echo "<br>";
   echo "<h2>Exercise: 04  Create a function </h2>";

   function greetUser($name){
            echo "Hello,  ".$name;
   }


   greetUser(" Abdul Raqeeb Korejo");


   echo "<br>";

  echo "<h2>Exercise 5: Create an indexed array</h2>";
  
  $colorName = ["Red", "Pink", "Orange", "Green","Black"];

    foreach ($colorName as $colors) {
        echo $colors."<br>";
    }





$value = 5;
echo "<h2>Exercise 06 increment (++) and decrement (--) operators</h2>";
echo "<br>";
echo "Initial value: " . $value."<br>";

$value++;
echo "After increment: " . $value."<br>";

$value--;
echo "After decrement: " . $value."<br>";

  
   ?>