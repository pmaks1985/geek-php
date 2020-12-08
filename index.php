<?php
include "config.php";

$sql = "select * from images";
$res = mysqli_query($connect, $sql);

while ($data = mysqli_fetch_assoc($res)) {
    print_r($data);
}
?>

