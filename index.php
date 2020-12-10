<?php
include "config.php";

$sql = "select * from images order by count desc";
$res = mysqli_query($connect, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Geek-php</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="d-flex flex-wrap">
                <?php
                while ($data = mysqli_fetch_assoc($res)) {
                    $alt = $data['name'];
                    $alt = substr ($alt, 0, strrpos($alt, '.'));
                    ?>
                    <a class="photo position-relative" href="<?=$data['path_big'].$data['name']?>" target="_blank">
                        <img src="<?=$data['path_small'].$data['name']?>" alt="<?=$alt?>"> <!--в alt название файла из БД-->
                        <small class="position-absolute text-white" style="z-index: 1;top: 85%;left: 75%;">Просмотры: <?=$data['count']?></small>
                    </a>
                    <?
                }
                ?>
            </div>
        </div>
    </div>


</div>





</body>

</html>
