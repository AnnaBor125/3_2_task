<?php
// Объявление
$name = "Anna";
$age = 30;
$isStudent = true;
define( 'CONSTANT', 'WEBSITE');
// Вывод значений
echo $name
echo $age
echo $isStudent
echo $CONSTANT
// Преобразование типов
$numberString = 15;
$number = (int)$numberString;
echo $number
echo gettype($number)
// Арифметические операции
$num1 = 10;
$num2 = 5;
$sum = $num1 + &$num2;
echo $sum;

  if ($num1 == 10 and $num2 == 5)
      echo "and Success \n";
// Логическое выражение
var_dump($num1 == $num2) + "\n";
// Суперглобальная переменная $_SERVER
echo $_SERVER['REQUEST_IP']
?>
