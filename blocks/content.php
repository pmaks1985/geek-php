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
        unset($_SESSION['login']);
        session_destroy();
        $_SESSION = null;
        echo "<p class='h5 text-success mt-4'>Вы успешно вышли из системы</p>";
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
    case 'basket':
        include "pages/basket.php";
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
