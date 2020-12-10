<?php
include "config.php";
$id = $_GET['id'];
$name = $_GET['name'];
$path = $_GET['path'];
$count = $_GET['count'];
if($id){
    $sql = "update images set count=count+1 where id = $id";
    $res = mysqli_query($connect, $sql);
    }
?>
<img src="<?=$path.$name?>"> <br>
<span>Количество просмотров:<?=$count?></span> <br>
<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
