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
    $data = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) == 1) {
        $_SESSION["login"] = $login;
        $_SESSION["pass"] = $pass;
        if ($data['id_user'] == 10) { // сделал одного администратора в системе
            $_SESSION['admin'] = true;
        }
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

function addingUser($connect, $fio, $phone, $user_login, $user_pass, $address)
{
    $errors = "";
    $fio = !empty($_POST['fio']) ? trim(strip_tags($_POST['fio'])) : $errors .= "Поле <b>Ваше имя</b> должно быть заполнено!<br>";
    $phone = !empty($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : $errors .= "Поле <b>Ваш телефон</b> должно быть заполнено!<br>";
    $user_login = !empty($_POST['user-login']) ? trim(strip_tags($_POST['user-login'])) : $errors .= "Поле <b>Ваш логин</b> должно быть заполнено!<br>";
    $user_pass = !empty($_POST['user-pass']) ? trim(strip_tags($_POST['user-pass'])) : $errors .= "Поле <b>Ваш пароль</b> должно быть заполнено!<br>";
    $address = trim(strip_tags($_POST['address']));
    if ($errors) {
        header("Location: /index.php?page=reg&errors_reg=$errors");
    } else {
        $sql = "INSERT INTO users (fio, phone, address, login, pass, role) VALUES ('$fio', '$phone','$address','$user_login', '$user_pass', '0')";
        if (mysqli_query($connect, $sql)) {
            header("Location: /index.php?page=reg&reg-user=ok&fio=$fio");
        }
    }
}

function updateGood($connect, $title, $price, $info, $img, $id)
{
    $sql = "update goods set title='$title',info='$info',price=$price,img='$img' where id=$id";
    $res = mysqli_query($connect, $sql);
    if ($res) {
        return 1;
    }
    return 0;
}

function getGoods($connect,$id=0){
    if($id == 0) {
        $sql = "select * from goods";
        $res = mysqli_query($connect,$sql);
        while($good = mysqli_fetch_assoc($res)){//каждую строку в базе с товаром преобразовали в массив $good
            $goods[$good['id']] = $good['title'];//каждый товар добавили в массив товаров $goods
        }
        return $goods;
    }
    else{
        $sql = "select * from goods where id=$id";
        $res = mysqli_query($connect,$sql);
        return mysqli_fetch_assoc($res);//вернули массив из 1 элемента
    }
}