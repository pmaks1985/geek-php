<?php
switch ($_GET['page']) {
    case 'catalog':
        include "pages/catalog/catalog.php";
        break;
    case 'detail-good':
        include "pages/catalog/detail-good.php";
        break;
    case 'reviews':
        include "pages/reviews.php";
        break;
    case 'reg':
        include "pages/reg.php";
        break;
    case 'auth':
        include "pages/auth.php";
        break;
    case 'lk':
        include "pages/lk.php";
        break;
    case 'exit':
        unset($_SESSION['user_id']);
        session_destroy();
        $_SESSION = null;
        echo "Вы успешно вышли из системы<br>";
        echo "<a href='index.php'>Перейти на главную</a>";
        break;
    case 'cart':
        include "pages/cart.php";
        break;
    case 'admin':
        include "pages/admin/index.php";
        break;
    case 'add_good':
        include "pages/admin/add_good.php";
        break;
    case 'edit_good':
        include "pages/admin/edit_good.php";
        break;
    case 'prices':
        include "pages/prices.php";
        break;
    case 'details_order':
        include "pages/admin/detail_order.php";
        break;
    case 'edit_orders':
        include "pages/admin/orders.php";
        break;
    default:
        include "pages/content.php";
}
?>
