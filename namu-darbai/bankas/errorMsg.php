<?php if ($msg = getMessage()) : ?>
    <div class="<?= setClass() ?>">
        <?= setSvg() ?>
        <?= $msg ?>
    </div>
<?php endif ?>