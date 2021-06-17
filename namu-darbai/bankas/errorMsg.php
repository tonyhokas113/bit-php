<?php if ($msg = getMessage()) : ?>
    <div style="<?= setStyle() ?>">
        <?= $msg ?>
    </div>
<?php endif ?>