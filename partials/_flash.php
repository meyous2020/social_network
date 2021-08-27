
<?php if(isset($_SESSION['notification']['message'])) : ?>
    <div class="container">
        <div class="alert alert-<?= $_SESSION['notification']['type'] ?>">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5><?= $_SESSION['notification']['message'] ?></h5>
        </div>
    </div>
    <?php $_SESSION['notification'] = []; ?>
<?php endif;?>


