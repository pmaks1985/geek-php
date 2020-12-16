<?php
include_once "../config/config.php";
$title = trim(strip_tags($_POST['title']));
$description = trim(strip_tags($_POST['description']));
$full_description = trim(strip_tags($_POST['full_description']));
$price = (int)trim(strip_tags($_POST['price']));
$filePath = $_FILES['img']['tmp_name'];
$fileName = $_FILES['img']['name'];
$type = $_FILES['img']['type'];
$size = $_FILES['img']['size'];

copy($filePath,"../public/uploads/".$fileName);

$sql = "INSERT INTO catalog ( title, description, full_description, price) VALUES ('$title','$description','$full_description','$price')";
if (mysqli_query($connect, $sql)) {
    header("Location: ../admin/");
}
