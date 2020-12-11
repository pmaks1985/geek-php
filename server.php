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
echo $res;
