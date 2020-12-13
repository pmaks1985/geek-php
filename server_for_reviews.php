<?php
include "config.php";
$name = $_POST['authors-name'];
$review_text = $_POST['review-text'];

$sql = "insert into reviews (name, text_review) values ('$name', '$review_text')";
if(mysqli_query($connect,$sql)){
    header("Location: reviews.php");
}