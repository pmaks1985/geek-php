<?php
include_once "../config/config.php";
$title = trim(strip_tags($_POST['title']));
$description = trim(strip_tags($_POST['description']));
$full_description = trim(strip_tags($_POST['full_description']));
$price = (int)trim(strip_tags($_POST['price']));

$sql = "INSERT INTO catalog ( title, description, full_description, price) VALUES ('$title','$description','$full_description','$price')";
if (mysqli_query($connect, $sql)) {
    header("Location: ../admin/");
}
