<?php
include_once "../models/db_goods.php";
if($_GET[id]){
    $id= (int)($_GET[id]);
    $good = goods_get($connect, $id);
}
