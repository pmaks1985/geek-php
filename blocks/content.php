<div class="col-md-10">
    <div class="d-flex flex-wrap">
        <?php
        $images = scandir("images");
        for ($i = 2; $i < count($images); $i++) { ?>
            <a href="full_image.php?file=<?= $images[$i]; ?>">
                <!--target="_blank" для ссылки не добавлял, много лишних вкладок-->
                <img src="/images/<?= $images[$i]; ?>">
            </a>

        <?php
        }
        ?>
    </div>
</div>