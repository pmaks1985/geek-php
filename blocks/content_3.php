<div class="col-md-10">
    <div class="d-flex flex-wrap">
        <?php
        $images = scandir("images");
        for ($i = 2; $i < count($images); $i++) { ?>
            <a href="/images/?file=<?= $images[$i]; ?>" data-toggle="modal" data-target=".bd-example-modal-lg">
                <img src="/images/<?= $images[$i]; ?>" id="<?= $i ?>">
            </a>

        <?php
        }
        ?>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
                <img src="/images/<?= $_GET['file']; ?>">
            </div>
        </div>
    </div>
</div>