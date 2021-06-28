<?php if ($msg = getMessage()) : ?>
    <span style="<?= setStyle() ?>">
        <?= $msg ?>
    </span>
<?php endif ?>