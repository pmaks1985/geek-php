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

// $cities = array(
//     "Московская область" => ["Москва", "Зеленоград", "Клин"],
//     "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
//     "Ивановская область" => ["Иваново", "Шуя", "Кинешма", "Плес"],
// );

// // print_r($cities);

// foreach ($cities as $region => $city) {
//     echo $region . ":<br>";
//     foreach ($city as $value) {
//         echo $value . "<br>";
//     }
// }

// 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).

// Написать функцию транслитерации строк.

// $alphabet = array(
//     "a" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z",
//     "и" => "i", "й" => "i", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
//     "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "ce", "ч" => "ch", "ш" => "sh", "щ" => "sh",
//     "ъ" => "", "ы" => "yi", "ь" => "", "э" => "ue", "ю" => "y", "я" => "ya",
// );

// function translit($word, $alphabet)
// {
//     echo strtr($word, $alphabet);
// }

// translit("животное", $alphabet);

// 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

// 5.1

// $replacement = array(
//     " " => "_",
// );

// function translit($word, $replacement)
// {
//     echo strtr($word, $replacement);    
// }
// translit("животное которое поёт)", $replacement);

// 5.2

// $replacement = array(" ");

// function translit($word, $replacement)
// {
//     echo str_replace($replacement, "_", $word);
// }
// translit("животное которое всегда поёт)", $replacement);

// 6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и 
// вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

// $menu = array(
//     "Главная" => [
//         "Комплект шаблонов" => ["Комплекты шаблонов для АППЗ", "Комплекты шаблонов по ПБ организации", "Комплекты шаблонов по ОТ в организации"],
//         "Стоимость" => ["Стоимость комплекта по Пожарной безопасности", "Стоимость комплекта по Охране труда"],
//         "Статьи" => ["Пожарная безопасность", "Экологическая безопасность", "ГО и ЧС", "Антитеррористическая защищенность", "Оказание первой помощи"],
//         "Контакты" => []
//     ],
// );

// foreach ($menu as $home => $value) {
//     echo $home . "<br><ul>";
//     foreach ($value as $menuItem => $menuItemValue) {
//         echo "<li>$menuItem<ul>";
//         foreach ($menuItemValue as $menuPoints) {
//             echo "<li>$menuPoints</li>";
//         }
//         echo "</li></ul>";
//     }
//     echo "</ul>";
// }

// // print_r($menu);

// 7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так:

//     for (…){ // здесь пусто}

// for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++); //решение на https://www.php.net/manual/ru/control-structures.for.php 4 пример)
