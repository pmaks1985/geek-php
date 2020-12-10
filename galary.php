<?php
include "config.php";

$sql = "select * from images order by count desc";
$res = mysqli_query($connect, $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="d-flex flex-wrap">
                <?php
                while ($data = mysqli_fetch_assoc($res)) {?>
                    <a class="photo" href="server.php?id=<?=$data['id']?>&name=<?=$data['name']?>">
                        <img src="<?=$data['path_small'].$data['name']?>" alt="">
                    </a>
                    <?
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
