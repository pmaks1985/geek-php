<?php
include "../config/config.php";
$name = strip_tags($_POST['authors-name']);
$review_text = strip_tags($_POST['review-text']);

$sql = "insert into reviews (name, text_review) values ('$name', '$review_text')";
if (mysqli_query($connect, $sql)) {
    header("Location: index.php");
}
