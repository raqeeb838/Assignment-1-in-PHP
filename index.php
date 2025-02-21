<?php
   echo "<h2>Exercise: 01 Declare a variable and Concatinate both </br></h2>";
  $name = "Abdul Raqeeb";
  $age = 18;

  echo "My name is ". $name ." and I am ".$age ." years old";


  echo "<h2>Exercise 02: Declare variables with different data types</h2>";

  echo "<br>";
  echo "<h4>String Value</h4>";
  $myName = "Abdul Raqeeb";
   echo $myName;

  echo "<br>";
  echo "<h4>Decimal Number</h4>";
  $decimalNumber = 12.8;
  echo $decimalNumber;
  

   echo "<br>";
   echo "<h4>Boolean Value</h4>";
   $isLogin = true;
   echo $isLogin;


   echo "<br>";
   echo "<h4>Associative Array</h4>";
   $myInfo = [
       "Name" => "Abdul Raqeeb",
       "Age" => "18+"
   ];

   var_dump($myInfo);

   echo "<br>";
   echo "<h2>Exercise 03 Arithmetic Operators</h2>";

   echo "<br>";

   $a = 5;
   $b = 7;

  $addValue = $a + $b;

   echo "Addition a and b value = ". $addValue;

   echo "<br>";
   $checkEven = 5;
   if($checkEven%2==0){
    echo "number is even";
   }else{
    echo "number is odd";
   }
?>

