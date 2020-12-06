<div class="col-md-10">
    <div class="d-flex flex-wrap">
        <?php
        $images = scandir("images");
        for ($i = 2; $i < count($images); $i++) { ?>
            <a href="?file=<?= $images[$i]; ?>" data-toggle="modal" data-target="#myModal">
                <img src="/images/<?= $images[$i]; ?>" id="<?= $i ?>">
            </a>

        <?php
        }
        ?>
    </div>
</div>

<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/<?= $_GET['file'] ?>">
            </div>
        </div>
    </div>
</div>