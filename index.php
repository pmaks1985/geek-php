<?php
// 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

// $chi = 0;
// while ($chi <= 100) {
//     if ($chi % 3 == 0) {
//         echo $chi . "<br>";
//     }
//     $chi++;
// }

// 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:

//     0 – ноль.
//     1 – нечетное число.
//     2 – четное число.
//     3 – нечетное число.
//     …
//     10 – четное число.

// $i = 0;
// echo "$i – ноль.<br>";
// do {
//     $i++;
//     if ($i % 2 == 0) {
//         echo "$i - четное число.<br>";
//     } elseif ($i % 2 == 1) {
//         echo "$i - нечетное число.<br>";
//     }
// } while ($i < 10);

// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов 
// из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:

//     Московская область:
//     Москва, Зеленоград, Клин
//     Ленинградская область:
//     Санкт-Петербург, Всеволожск, Павловск, Кронштадт
//     Рязанская область … (названия городов можно найти на maps.yandex.ru)
