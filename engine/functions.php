<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

function addingReview($connect, $name, $review_text)
{
    $name = strip_tags($_POST['authors-name']);
    $review_text = strip_tags($_POST['review-text']);

    $sql = "insert into reviews (name, text_review) values ('$name', '$review_text')";
    if (mysqli_query($connect, $sql)) {
        header("Location: /?page=reviews");
    }
}

function regUser($connect, $login, $pass)
{
    session_start();
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);

    $sql = "select id_user from users where login='$login' and pass='$pass'";
    $res = mysqli_query($connect, $sql) or die("Error: " . mysqli_error($connect));
    if (mysqli_num_rows($res) == 1) {
        $_SESSION["login"] = $login;
        $_SESSION["pass"] = $pass;
        header("Location: ../index.php?page=auth&success=true");
    } else {
        header("Location: ../index.php?page=auth&error=true");
    }
}

function deleteGood($connect, $id)
{
    $id = $_GET['id'];
    if ($id == 0)
        return false;
    $query = sprintf("DELETE FROM catalog where id='%d'", $id);
    $result = mysqli_query($connect, $query);
    header("Location: ../index.php?page=admin");
}

function addingGood($connect, $title, $description, $full_description, $price)
{
    $title = trim(strip_tags($_POST['title']));
    $description = trim(strip_tags($_POST['description']));
    $full_description = trim(strip_tags($_POST['full_description']));
    $price = (int)trim(strip_tags($_POST['price']));
    $filePath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $size = $_FILES['image']['size'];
    copy($filePath, "../images/big/" . $fileName);
    if (move_uploaded_file($filePath, "../images/" . $fileName)) {
        $sql = "INSERT INTO catalog ( title, description, full_description, price, path_to_picture) VALUES ('$title','$description','$full_description','$price', '$fileName')";
        if (mysqli_query($connect, $sql)) {
            header("Location: ../index.php?page=admin");
        }
    }
}

function addingUser($connect, $fio, $phone, $user_login, $user_pass)
{
    $fio = trim(strip_tags($_POST['fio']));
    $phone = trim(strip_tags($_POST['phone']));
    $user_login = trim(strip_tags($_POST['user_login']));
    $user_pass = trim(strip_tags($_POST['user_pass']));
//    $address = trim(strip_tags($_POST['address']));
//    if (isset($_POST['address'])) {
//        $address = trim(strip_tags($_POST['address']));
//        $sql = "INSERT INTO users (fio, phone, address, login, pass) VALUES('$fio', '$phone', '$address', '$user_login', '$user_pass')";
//    } else {
//        $sql = "INSERT INTO users (fio, phone, login, pass) VALUES('$fio', '$phone', '$user_login', '$user_pass')";
//    }
    $sql = "INSERT INTO users (fio, phone, login, pass, role) VALUES ('$fio', '$phone','$user_login', '$user_pass', '0')";
    if (mysqli_query($connect, $sql)) {
        header("Location: /index.php?page=reg&reg-user=ok");
    }
}