<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/engine/functions.php";

if (isset($_POST['authors-name']) && isset($_POST['review-text'])) {
    addingReview($connect, $_POST['authors-name'], $_POST['review-text']);
}

if (isset($_POST['login']) && isset($_POST['pass'])) {
    regUser($connect, $_POST['login'], $_POST['pass']);
}
