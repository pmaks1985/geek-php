<div class="col-md-8">
    <?php
    $images = scandir("images");
    for ($i = 2; $i < count($images); $i++) { ?>
        <a href="full_image.php?file=<?= $images[$i]; ?>">
            <img src="/images/<?= $images[$i]; ?>">
        </a>

    <?php
    }
    ?>
</div>