<?php
// print_r($_POST);
$one = strip_tags((int)$_POST['one']);
$two = strip_tags((int)$_POST['two']);

$sign = $_POST['sign'];
switch ($sign) {
    case '-':
        $res = $one - $two;
        break;
    case '+':
        $res = $one + $two;
        break;
    case '/':
        if ($two == "0") {
            $res = "Делить на 0 нельзя!";
        } else {
            $res = $one / $two;
        }
        break;
    case '*':
        $res = $one * $two;
        break;

    default:
        $res = "Ошибка!!!";
        break;
}

if ($res) {
    header("Location: calc_1.php?result=$res");
}

$three = strip_tags((int)$_POST['three']);
$four = strip_tags((int)$_POST['four']);

$val_sign = $_POST['sign-val'];
switch ($val_sign) {
    case '-':
        $result = $three - $four;
        break;
    case '+':
        $result = $three + $four;
        break;
    case '/':
        if ($four == "0") {
            $result = "Делить на 0 нельзя!";
        } else {
            $result = $three / $four;
        }
        break;
    case '*':
        $result = $three * $four;
        break;

    default:
        $result = "Ошибка!!!";
        break;
}

if ($result) {
    header("Location: calc_2.php?result=$result");
}
