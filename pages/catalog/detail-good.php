<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/engine/functions.php";
$id = $_GET['id'];
if ($id) {
    $sql = "SELECT * FROM catalog WHERE id=$id";
}
if (mysqli_query($connect, $sql)) {
    $res = mysqli_fetch_assoc(mysqli_query($connect, $sql));
}
?>
<div class="row mt-5">
    <h1><?= $res['title']; ?></h1>
</div>
<div class="row mt-5">
    <div class="col">
        <img src="/images/big/<?= $res['path_to_picture']; ?>" alt="">
    </div>
    <div class="col">
        <p><?= $res['full_description']; ?></p>
        <div class="text-danger h2"><?= $res['price']; ?> ye</div>
        <div class="text-right ml-3">
            <a href="<?= $_SERVER['[DOCUMENT_ROOT]'] . "/public/basket/?id=" . $res['id'] ?>"
               class="btn btn-primary">Купить</a>
        </div>
    </div>
</div>
