<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

$idGood = $_GET['id'];
$userId = $_GET['user-id'];

$sql = "INSERT INTO basket (id_good, count, id_user) VALUES ('$idGood', 1, '$userId')";
if (mysqli_query($connect, $sql)) {
    header("Location: /?page=detail-good&success=ok&&id=" . $idGood);
}
