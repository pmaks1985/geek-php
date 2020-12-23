<?php
include_once $_SERVER['DOCUMENT_ROOT']."/config.php";

function addingReview($connect, $name, $review_text){
    $name = strip_tags($_POST['authors-name']);
    $review_text = strip_tags($_POST['review-text']);

    $sql = "insert into reviews (name, text_review) values ('$name', '$review_text')";
    if (mysqli_query($connect, $sql)) {
        header("Location: /?page=reviews");
    }
}

function viewProduct ($connect, $id){
    if ($id) {
        $sql = "SELECT * FROM catalog WHERE id=$id";
    }
    if (mysqli_query($connect, $sql)) {
        $res = mysqli_fetch_assoc(mysqli_query($connect, $sql));
    }
    return $res;
}