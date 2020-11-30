<?php

// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:

//     если $a и $b положительные, вывести их разность;
//     если $а и $b отрицательные, вывести их произведение;
//     если $а и $b разных знаков, вывести их сумму;

// ноль можно считать положительным числом.

// $a = -2;
// $b = 44;

// if ($a > 0 && $b > 0) {
//     echo $a - $b;
// } elseif ($a < 0 && $b < 0) {
//     echo $a * $b;
// } elseif (($a < 0 && $b > 0) || ($a > 0 && $b < 0)) {
//     echo $a + $b;
// } else {
//     echo "Ошибка!"
// }

// 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

// $a = rand(0, 15);
// switch ($a) {
//     case 0:
//         echo " 0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
//         break;
//     case 1:
//         echo " 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
//         break;
//     case 2:
//         echo " 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
//         break;
//     case 3:
//         echo " 3 4 5 6 7 8 9 10 11 12 13 14 15";
//         break;
//     default:
//         echo " Другое число";
// }

// $a = rand(0, 15);
// switch ($a) {
//     case $a:
//         echo "Выпало число: $a выводим ";
//         function recurse($a)
//         {
//             if ($a > 15) {
//                 return;
//             }
//             echo $a . " ";
//             recurse($a + 1);
//         }
//         recurse($a);
//         break;
//     default:
//         echo "Ошибка!";
// }

// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

// function result($a, $b)
// {
//     echo "Сумма a и b равна: " . ($a + $b) . "<br>" .
//         "Разность a и b равна: " . ($a - $b) . "<br>" .
//         "Произведение a и b равно: " . ($a * $b) . "<br>" .
//         "Частное a и b равно: " . ($a / $b) . "<br>" .
//         "Остаток от деления a на b равен: " . ($a % $b);
//     return;
// }

// result(55, 15);

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из 
// арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

// function mathOperation($a, $b, $operation)
// {
//     switch ($operation) {
//         case "Сумма":
//             echo "Сумма a и b равна: " . ($a + $b);
//             break;
//         case "Разность":
//             echo "Разность a и b равна: " . ($a - $b);
//             break;
//         case "Произведение":
//             echo "Произведение a и b равно: " . ($a * $b);
//             break;
//         case "Частное":
//             echo "Частное a и b равно: " . ($a / $b);
//             break;
//         case "Остаток от деления":
//             echo "Остаток от деления a на b равен: " . ($a % $b);
//             break;
//         default:
//             echo "Ошибка!";
//     }
//     return;
// };

// mathOperation(44, 13, "Произведение");

// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

// function power($val, $pow)
// {

//     function recurse($pow)
//     {
//         if ($a > $pow) {
//             return;
//         }
//         echo $a . " ";
//         recurse($a + 1);
//     }
//     recurse($a);
// }

// power(2, 3);

// 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:

// 22 часа 15 минут
// 21 час 43 минуты

$h = date("G");
$m = date("i");

function todaysDate($hours, $minutes)
{

    if ($hours == 1 || $hours == 21) {
        $hoursText = " час ";
    } elseif ($hours > 1 && $hours < 5 || $hours > 21) {
        $hoursText = " часа ";
    } elseif ($hours > 4 && $hours < 21) {
        $hoursText = " часов ";
    }
    if ($minutes == 1 || $minutes == 11 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51) {
        $minutesText = " минута ";
    } elseif (($minutes > 1 && $minutes < 5) || ($minutes > 21 && $minutes < 25) || ($minutes > 31 && $minutes < 35) || ($minutes > 41 && $minutes < 45) || ($minutes > 51 && $minutes < 55)) {
        $minutesText = " минуты ";
    } elseif (($minutes > 4 && $minutes < 21) || ($minutes > 24 && $minutes < 31) || ($minutes > 34 && $minutes < 41) || ($minutes > 44 && $minutes < 51) || ($minutes > 54 && $minutes < 61)) {
        $minutesText = " минут ";
    }

    echo $hours  . $hoursText . $minutes . $minutesText;
}

todaysDate($h, $m);
