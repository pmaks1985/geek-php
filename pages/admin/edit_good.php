<?php
include "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM catalog WHERE id='$id' ";
$res = mysqli_query($connect, $sql);
?>
<div class="row mt-5">
    <h1>Редактировать товар</h1>
</div>
<div class="row">
    <? while ($data = mysqli_fetch_assoc($res)): ?>
        <form action="../../engine/server.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Название товара</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title"
                       value="<?= $data['title'] ?>">
            </div>
            <div class="form-group">
                <label for="description">Краткое описание товара</label>
                <textarea class="form-control" id="description" style="height: 100px"
                          name="description"><?= $data['description'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="full_description">Полное описание товара</label>
                <textarea class="form-control" id="full_description" style="height: 200px"
                          name="full_description"><?= $data['full_description'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена товара</label>
                <input type="number" class="form-control" id="price" name="price" aria-describedby="price"
                       value="<?= $data['price'] ?>">
            </div>
            <div class="form-group">
                <label for="image">Картинка</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
                <input type="file" accept="image/*" class="form-control" name="image" value="<?= $data['image'] ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Сохранить" name="edit-good">
        </form>
    <? endwhile; ?>
</div>
