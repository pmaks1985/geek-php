<?php
// echo "Hello, world!<br>";

// $int10 = 10;
// $int20 = 20;
// echo "Число $int10<br>";
// echo "Число $int20<br>";

// $a = 1;
// echo "$a<br>";
// echo '$a<br>';

// $a = 'Hello,';
// $b = 'world!';
// echo $a.$b;

//Домашнее задание

$a = 5;
$b = '05';
var_dump($a == $b); //true перед переменными не указан тип, поэтому в php они равны
var_dump((int)('012345')); //Почему 12345? Тип int - представляет целое число со знаком, у нуля нет знака, не сразу догадался)
var_dump((float)123.0 === (int)123.0); //false явно указан тип переменных, он разный
var_dump((int)0 === (int)'Some'); //true явно указан тип переменных, он одинаковый

$c = 1;
$d = 2;
$d = $d - $c;
echo "<br>$d"; //$d = 1
$c = $c + $d;
echo "<br>$c"; // $c = 2
?>