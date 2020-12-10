<?php
include "config.php";
$id = $_GET['id'];
$name = $_GET['name'];
if($id){
    $sql = "update images set count=count+1 where id = $id";
    $res = mysqli_query($connect, $sql);
    }
?>
<img src="image/big/<?=$name?>"> <br>
<span>Количество просмотров:</span>
<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
