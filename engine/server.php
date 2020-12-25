<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/engine/functions.php";

if (isset($_POST['authors-name']) && isset($_POST['review-text'])) {
    addingReview($connect, $_POST['authors-name'], $_POST['review-text']);
}

if (isset($_GET['delete-good']) && isset($_GET['id'])) {
    deleteGood($connect, $_GET['id']);
}

if (isset($_GET['delete-good']) && isset($_GET['id'])) {
    deleteGood($connect, $_GET['id']);
}

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['full_description']) && isset($_POST['price'])) {
    addingGood($connect, $_POST['title'], $_POST['description'], $_POST['full_description'], $_POST['price']);
}