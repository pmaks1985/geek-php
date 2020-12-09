<?php
include "config.php";

$sql = "select * from images";
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
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".photo").fancybox();
        });
    </script>
    <title>Geek-php</title>
</head>

<body>
<div class="container">
    <div class="col-md-10">
        <div class="d-flex flex-wrap">
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $alt = $data['name'];
                $alt = substr ($alt, 0, strrpos($alt, '.'));
                ?>
                <a class="photo" href="<?=$data['path_big'].$data['name']?>" target="_blank"><img src="<?=$data['path_small'].$data['name']?>" alt="<?=$alt?>"></a> <!--в alt название файла из БД-->
            <?
            }
            ?>
        </div>
    </div>
</div>





</body>

</html>
