<?php
include_once "../config/config.php";
$title = trim(strip_tags($_POST['title']));
$description = trim(strip_tags($_POST['description']));
$full_description = trim(strip_tags($_POST['full_description']));
$price = (int)trim(strip_tags($_POST['price']));
$filePath = $_FILES['image']['tmp_name'];
$fileName = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$size = $_FILES['image']['size'];
if (move_uploaded_file($filePath, "../public/uploads/images/" . $fileName)) {
    $sql = "INSERT INTO catalog ( title, description, full_description, price, path_to_picture) VALUES ('$title','$description','$full_description','$price', '$fileName')";
    if (mysqli_query($connect, $sql)) {
        header("Location: ../admin/");
    }
}
