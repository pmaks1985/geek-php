<?php
include "../../config/config.php";

$sql = "select * from reviews ORDER BY date_review DESC";
$res = mysqli_query($connect, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Rewiews</title>
</head>

<body>

<div class="container">
    <? include "../../templates/header.php"; ?>
    <div class="row mt-5">
        <h1>Отзывы сайта</h1>
    </div>
    <div class="row flex-column mt-5">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Дата отзыва</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Текст отзыва</th>
                </tr>
                </thead>
                <tbody>
                <? while ($data = mysqli_fetch_assoc($res)) { ?>
                    <tr>
                        <th scope="row"><?= $data['date_review'] ?></th>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['text_review'] ?></td>
                    </tr>
                <? } ?>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-4">
                <form action="server.php" method="post">
                    <div class="form-group">
                        <label for="authors-name"><span class="font-weight-bold">Имя автора</span></label>
                        <input type="text" class="form-control" name="authors-name" placeholder="Иван Иванов">
                    </div>
                    <div class="form-group">
                        <label for="review-text"><span class="font-weight-bold">Текст отзыва</span></label>
                        <textarea class="form-control" name="review-text" rows="3"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" name="review-button" value="Оставить отзыв" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>

</html>