<?php
 # FUNCTION - Block of code that can be repreatedly called

 /*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction() : usually used for classes
 */

 // Create Simple Function

 function simpleFunction() {
    echo 'Hello World';
 }

 // Run Simple Function

 simpleFunction();

// Function with Param
 function sayHello($name) {
    echo "Hello $name<br>";
 }
 sayHello('Fahim');
 sayHello('Bob');

 // Using a default parameter so that it doesn't get caught in the error if the user doesn't provide the parameter's value as the argument

 function newFunction($name = 'World') {
    echo "Hello $name <br>";
 }

 newFunction(); // Hello World
 newFunction('Tim'); // Hello Tim

 function addNumbers ($num1, $num2) {
    echo $num1 + $num2;
 }
 addNumbers(2, 3);

 echo '<br>';
 function subNumber($num1, $num2) {
    return $num1 - $num2;
 }

 echo subNumber(5, 2);

 echo '<br>';
 // Passing arguments by Reference

 $myNum = 10;

 function addFive($num) {
    $num += 5; // num = num + 5
 }

 function addTen(&$num) {
    $num += 10;
 }

 addFive($myNum);
 echo "Value: $myNum <br>";
 addTen($myNum);
 echo "Value: $myNum <br>";
?>