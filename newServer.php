<?php

// print_r($_POST);

$three = strip_tags((int)$_POST['three']);
$four = strip_tags((int)$_POST['four']);

$sign = $_POST['sign'];
switch ($sign) {
    case '-':
        $res = $three - $four;
        break;
    case '+':
        $res = $three + $four;
        break;
    case '/':
        if ($four == "0") {
            $res = "Делить на 0 нельзя!";
        } else {
            $res = $three / $four;
        }
        break;
    case '*':
        $res = $three * $four;
        break;

    default:
        $res = "Ошибка!!!";
        break;
}

if ($res) {
    header("Location: calc_2.php?result=$res");
}
